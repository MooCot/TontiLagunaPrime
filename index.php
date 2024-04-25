<?php

require __DIR__ . '/vendor/autoload.php';

use TontiLagunaPrime\App;
use TontiLagunaPrime\Reader\ConsoleReader;
use TontiLagunaPrime\Resource;

$app = new App(new ConsoleReader(new Resource()));
$app->process();
