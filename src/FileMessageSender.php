<?php

namespace TontiLagunaPrime;

class FileMessageSender implements MessageSenderInterface
{
    public function send($message)
    {
        $filePath = "example.txt";

        if (!file_exists($filePath)) {
            touch($filePath);
        }

        file_put_contents($filePath, $message . "\n", FILE_APPEND);

        if (file_exists($filePath)) {
            return true;
        } else {
            return false;
        }
    }
}