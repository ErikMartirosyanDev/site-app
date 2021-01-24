<?php

namespace App\Services\MessageService;

interface MessageService
{
    public function createMessage(array $data): MessageDto;

    public function retrieveMessagesByWidgetId(int $widget_id): array;
}
