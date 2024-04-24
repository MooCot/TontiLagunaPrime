<?php

namespace TontiLagunaPrime;

class ParticipantChecker
{
    public function isParticipant($value) {
        if (is_numeric($value) && $value >= 0 && $value <= 8) {
            return true;
        }
        throw new InvalidParticipandException();
    }
}