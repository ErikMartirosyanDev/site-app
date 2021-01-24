<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CreateMessage extends Component
{
    public int $widgetId;

    /**
     * Create a new component instance.
     *
     * @param string $widgetId
     */
    public function __construct(int $widgetId)
    {
        $this->widgetId = $widgetId;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.create-message');
    }
}
