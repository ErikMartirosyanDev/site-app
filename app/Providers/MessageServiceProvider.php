<?php

namespace App\Providers;

use App\Services\MessageService\MessageService;
use App\Services\MessageService\MessageServiceImplementation;
use Illuminate\Support\ServiceProvider;

class MessageServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(MessageService::class, MessageServiceImplementation::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
