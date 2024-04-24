<?php

require __DIR__ . '/vendor/autoload.php';

use TontiLagunaPrime\Client;
use TontiLagunaPrime\File;
use TontiLagunaPrime\Resource;
use TontiLagunaPrime\InvalidParticipandException;
use TontiLagunaPrime\InvalidActivityException;
use TontiLagunaPrime\InvalidSenderException;
use TontiLagunaPrime\ActivityChecker;

// $params = [
//     'participants' => 5,
//     'type' => 'social'
// ];
// $ansver = Client::send('https://www.boredapi.com/api/activity?', $params);
// File::test($ansver);
// echo $ansver;
// $resource = new Resource();
// echo "кількість учасників: 0 - 8 \n";
// $participants = fgets(STDIN);
// $resource->setParticipants($participants);
// echo "Привет, $participants !";
// echo 'тип відпочинку:  ["education", "recreational", "social", "diy", "charity", "cooking", "relaxation", "music", "busywork"]' . "\n";
// $activity = fgets(STDIN);
// $resource->setActivity($activity);
// echo "Привет, $activity !";
// echo 'спосіб відправки повідомлення:  ["file", "console"]' . "\n";
// $sender = fgets(STDIN);
// $resource->setSender($sender);
// echo "Привет, $sender !";

$resource = new Resource();
echo "кількість учасників: 0 - 8 \n";

while (true) {
    $participants = fgets(STDIN);
    try {
        $resource->setParticipants($participants);
        echo "Учасники, $participants !";
        break;
    } catch (InvalidParticipandException $e) {
        echo "Ошибка: " . $e->getMessage() . "\n";
        echo "Пожалуйста, введите количество учасниики еще раз: ";
    }
}
echo 'тип відпочинку:  ["education", "recreational", "social", "diy", "charity", "cooking", "relaxation", "music", "busywork"]' . "\n";
while (true) {
    $activity = trim(fgets(STDIN));
    try {
        $resource->setActivity($activity);
        echo "Привет, $activity !";
        break;
    } catch (InvalidActivityException $e) {
        echo "Ошибка: " . $e->getMessage() . "\n";
        echo "Пожалуйста, введите количество activity еще раз: ";
    }
}
echo 'спосіб відправки повідомлення:  ["file", "console"]' . "\n";
while (true) {
    $sender = trim(fgets(STDIN));
    try {
        $resource->setSender($sender);
        echo "Привет, $sender !";
        break;
    } catch (InvalidSenderException $e) {
        echo "Ошибка: " . $e->getMessage() . "\n";
        echo "Пожалуйста, введите количество sender еще раз: ";
    }
}

$ansver = Client::send('https://www.boredapi.com/api/activity?', $resource->toArray());

print_r($ansver);
