<?php

namespace App\Services\MessageService;

use Illuminate\Support\Facades\Http;

class MessageServiceImplementation implements MessageService
{
    public function createMessage(array $data): MessageDto
    {
        $data_app_url = config('external-services.data_app_url');

        $url = "{$data_app_url}/api/messages";

        $response = Http::post($url, $data)->json('data');

        return $this->createMessageDtoFromResponse($response);
    }

    public function retrieveMessagesByWidgetId(int $widget_id): array
    {
        $data_app_url = config('external-services.data_app_url');

        $url = "{$data_app_url}/api/messages/by_widget/{$widget_id}";

        $messages_response = Http::get($url)->json('data');

        return collect($messages_response)
            ->map(function ($message_response) {
                return $this->createMessageDtoFromResponse($message_response);
            })
            ->toArray();
    }

    private function createMessageDtoFromResponse(array $response): MessageDto
    {
        return new MessageDto(
            $response['id'],
            $response['name'],
            $response['email'],
            $response['message'],
            $response['created_at'],
        );
    }
}
