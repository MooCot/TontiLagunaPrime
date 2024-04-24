<?php

namespace TontiLagunaPrime;

class Sender
{
    public bool $consoleSender;
    public bool $fileSender;
    public function __construct(bool $cs, bool $fs)
    {
        $this->consoleSender = $cs;
        $this->fileSender = $fs;
    }
}
