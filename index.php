<?php

require __DIR__ . '/vendor/autoload.php';

use TontiLagunaPrime\Client;
use TontiLagunaPrime\File;

$ansver = Client::test();
File::test($ansver);
// echo $ansver;
// echo "кількість учасників: 0 - 8";
// $name = fgets(STDIN);
// echo "Привет, $name !";
// echo 'тип відпочинку:  ["education", "recreational", "social", "diy", "charity", "cooking", "relaxation", "music", "busywork"]';
// $name = fgets(STDIN);
// echo "Привет, $name !";
// echo 'спосіб відправки повідомлення:  ["file", "console"]';
// $name = fgets(STDIN);
// echo "Привет, $name !";
