<?php

namespace TontiLagunaPrime;

class ConsoleMessageSender implements MessageSenderInterface
{
    public function send($message)
    {
        echo $message . PHP_EOL;
    }
}