<?php

namespace App\View\Components;

use Illuminate\Support\Collection;
use Illuminate\View\Component;

class MessagesList extends Component
{
    public int $widgetId;
    public Collection $messages;

    public function __construct(int $widgetId, array $messages)
    {
        $this->widgetId = $widgetId;
        $this->messages = collect($messages);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.messages-list');
    }
}
