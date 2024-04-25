<?php

namespace TontiLagunaPrime;

interface Reader {
    public function getInputParticipants();
    public function getInputActivity();
    public function getInputSender();

    public function getResource();
}
