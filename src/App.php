<?php

namespace TontiLagunaPrime;

use TontiLagunaPrime\Client;

class App
{
    private Reader $reader;

    public function __construct(Reader $reader)
    {
        $this->reader = $reader;
    }

    public function process()
    {
        $this->reader->getInputParticipants();
        $this->reader->getInputActivity();
        $this->reader->getInputSender();
        $resource = $this->reader->getResource();
        $ansver = Client::send('https://www.boredapi.com/api/activity?', $resource->toArray());

        $messageSender = $this->createMessageSender($resource->getSender());
        $messageSender->send($ansver);
    }

    private function createMessageSender($sender)
    {
        if ($sender === 'file') {
            return new MessageSender(new FileMessageSender());
        } else {
            return new MessageSender(new ConsoleMessageSender());
        }
    }
}
