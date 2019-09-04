<?php

namespace ThinksterMind\ChatKit\Facades;

use Illuminate\Support\Facades\Facade;

class ChatKit extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'chatkit';
    }
}