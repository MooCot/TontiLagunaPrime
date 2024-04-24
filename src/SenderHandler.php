<?php

namespace TontiLagunaPrime;

abstract class SenderHandler
{
    protected ?SenderHandler $successor = null;
    abstract public function handle(Sender $sender);
}
