<?php

namespace ThinksterMind\ChatKit;

use Chatkit\Chatkit as ChatKitCore;

class ChatKit
{
    protected $instance;
    protected $config;

    public function __construct($config = false)
    {
        if ($config):
            $this->config = $config;
        else:
            $this->config = config('chatkit.config');
        endif;

        $this->instance = $this->getInstance();
    }

    private function getInstance()
    {
        return new ChatKitCore($this->config);
    }

    public function __call($method, $args)
    {
        if (count($args) === 0) {
            $response = $this->instance->$method();
        } else {
            $response = $this->instance->$method($args[0]);
        }
        return $response;
    }

    public function chatkit()
    {
        return $this->instance;
    }

}