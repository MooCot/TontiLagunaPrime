<?php

namespace TontiLagunaPrime\Reader;

use TontiLagunaPrime\Resource;
use TontiLagunaPrime\Exception\InvalidParticipandException;
use TontiLagunaPrime\Exception\InvalidActivityException;
use TontiLagunaPrime\Exception\InvalidSenderException;

class ConsoleReader implements Reader
{
    private Resource $resource;

    public function __construct(Resource $res)
    {
        $this->resource = $res;
    }

    public function getInputParticipants()
    {
        echo "кількість учасників: 0 - 8 \n";

        while (true) {
            $participants = fgets(STDIN);
            try {
                $this->resource->setParticipants($participants);
                echo "Кількість, $participants !";
                break;
            } catch (InvalidParticipandException $e) {
                echo "Error: " . $e->getMessage() . "\n";
                echo "Ще раз: ";
            }
        }
    }
    public function getInputActivity()
    {
        echo 'тип відпочинку:  ["education", "recreational", "social", "diy", "charity", "cooking", "relaxation", "music", "busywork"]' . "\n";
        while (true) {
            $activity = trim(fgets(STDIN));
            try {
                $this->resource->setActivity($activity);
                echo "Тип, $activity";
                break;
            } catch (InvalidActivityException $e) {
                echo "Error: " . $e->getMessage() . "\n";
                echo "Ще раз: ";
            }
        }
    }
    public function getInputSender()
    {
        echo 'спосіб відправки повідомлення:  ["file", "console"]' . "\n";
        while (true) {
            $sender = trim(fgets(STDIN));
            try {
                $this->resource->setSender($sender);
                echo "Спосіб, $sender !";
                break;
            } catch (InvalidSenderException $e) {
                echo "Error: " . $e->getMessage() . "\n";
                echo "Ще раз: ";
            }
        }
    }

    public function getResource(): Resource
    {
        return $this->resource;
    }
}
