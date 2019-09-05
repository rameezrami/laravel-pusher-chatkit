<?php

namespace ThinksterMind\ChatKit;

use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;

class ChatKitServiceProvider extends ServiceProvider
{

    /**
     * Boot the service provider.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/config/chatkit.php' => config_path('chatkit.php'),
        ]);
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        App::bind('chatkit', function () {
            return new ChatKit();
        });

        $this->mergeConfigFrom(__DIR__.'/config/chatkit.php','chatkit');
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [];
    }
}
