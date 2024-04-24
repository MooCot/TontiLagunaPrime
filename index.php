<?php

require __DIR__ . '/vendor/autoload.php';

use TontiLagunaPrime\Client;
use TontiLagunaPrime\File;
use TontiLagunaPrime\Resource;
use TontiLagunaPrime\InvalidParticipandException;
use TontiLagunaPrime\InvalidActivityException;
use TontiLagunaPrime\InvalidSenderException;
use TontiLagunaPrime\ActivityChecker;
use TontiLagunaPrime\App;
use TontiLagunaPrime\ConsoleReader;
use TontiLagunaPrime\TextSave;

$app = new App(new ConsoleReader(new Resource()), new TextSave());
$app->process();

// print_r($ansver);
