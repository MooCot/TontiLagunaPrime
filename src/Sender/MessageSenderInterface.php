<?php
namespace TontiLagunaPrime\Sender;

interface MessageSenderInterface
{
    public function send($message);
}