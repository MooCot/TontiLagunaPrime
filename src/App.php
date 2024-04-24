<?php

namespace TontiLagunaPrime;

use TontiLagunaPrime\Client;

class App
{
    private Reader $reader;
    private Saver $saver;

    public function __construct(Reader $reader, Saver $saver)
    {
        $this->reader = $reader;
        $this->saver = $saver;
    }

    public function process()
    {
        $this->reader->getInputParticipants();
        $this->reader->getInputActivity();
        $this->reader->getInputSender();
        $resurse = $this->reader->toResource();
        $ansver = Client::send('https://www.boredapi.com/api/activity?', $resurse->toArray());
        $sender = $resurse->getSender();
        if ($sender === 'file') {
            $this->saver->save($ansver);
        }
        else {
            echo $sender;
        }
    }
}
