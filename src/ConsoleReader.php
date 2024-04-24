<?php

namespace TontiLagunaPrime;

use TontiLagunaPrime\Resource;
use TontiLagunaPrime\InvalidParticipandException;
use TontiLagunaPrime\InvalidActivityException;
use TontiLagunaPrime\InvalidSenderException;

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
                echo "Учасники, $participants !";
                break;
            } catch (InvalidParticipandException $e) {
                echo "Ошибка: " . $e->getMessage() . "\n";
                echo "Пожалуйста, введите количество учасниики еще раз: ";
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
                echo "Привет, $activity !";
                break;
            } catch (InvalidActivityException $e) {
                echo "Ошибка: " . $e->getMessage() . "\n";
                echo "Пожалуйста, введите количество activity еще раз: ";
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
                echo "Привет, $sender !";
                break;
            } catch (InvalidSenderException $e) {
                echo "Ошибка: " . $e->getMessage() . "\n";
                echo "Пожалуйста, введите количество sender еще раз: ";
            }
        }
    }

    public function toResource(): Resource
    {
        return $this->resource;
    }
}
