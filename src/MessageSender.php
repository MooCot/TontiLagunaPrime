<?php
namespace TontiLagunaPrime;

class MessageSender
{
    private $sender;

    public function __construct(MessageSenderInterface $sender)
    {
        $this->sender = $sender;
    }

    public function send($message)
    {
        $this->sender->send($message);
    }
}
