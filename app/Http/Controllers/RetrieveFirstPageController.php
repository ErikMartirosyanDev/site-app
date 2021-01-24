<?php

namespace App\Http\Controllers;

use App\Services\MessageService\MessageService;
use Illuminate\Http\Request;

class RetrieveFirstPageController extends Controller
{
    private MessageService $messageService;

    public function __construct(MessageService $messageService)
    {
        $this->messageService = $messageService;
    }

    public function __invoke(Request $request)
    {
        $messages = $this->messageService->retrieveMessagesByWidgetId(1);

        return view('pages.first-page')
            ->with('messages', $messages);
    }
}
