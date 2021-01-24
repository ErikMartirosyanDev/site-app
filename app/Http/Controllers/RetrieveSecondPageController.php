<?php

namespace App\Http\Controllers;

use App\Services\MessageService\MessageService;
use Illuminate\Http\Request;

class RetrieveSecondPageController extends Controller
{
    private MessageService $messageService;

    public function __construct(MessageService $messageService)
    {
        $this->messageService = $messageService;
    }

    public function __invoke(Request $request)
    {
        $messages = $this->messageService->retrieveMessagesByWidgetId(2);

        return view('pages.second-page')
            ->with('messages', $messages);
    }
}
