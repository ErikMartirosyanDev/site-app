<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMessageRequest;
use App\Services\MessageService\MessageService;

class CreateMessageController extends Controller
{
    private MessageService $messageService;

    public function __construct(MessageService $messageService)
    {
        $this->messageService = $messageService;
    }

    public function __invoke(CreateMessageRequest $request)
    {
        $data = $request->only([
            'widget_id',
            'name',
            'email',
            'message'
        ]);

        $this->sendEmail($data);
        $this->callCreateMessageRequest($data);

        return redirect()->back();
    }

    private function sendEmail(array $data): void
    {
        mail($data['email'], $data['name'], $data['message']);
    }

    private function callCreateMessageRequest(array $data): void
    {
        $this->messageService->createMessage($data);
    }
}
