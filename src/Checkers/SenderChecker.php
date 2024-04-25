<?php

namespace TontiLagunaPrime\Checkers;

use TontiLagunaPrime\Exception\InvalidSenderException;

class SenderChecker
{
    private $allowedSenders = ["file", "console"];

    public function isAllowedSender($sender) {
        if (!in_array($sender, $this->allowedSenders)) {
            throw new InvalidSenderException();
        }
        return true;
    }
}
