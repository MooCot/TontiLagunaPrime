<?php

namespace TontiLagunaPrime;

class ActivityChecker {
    private $allowedActivities = ["education", "recreational", "social", "diy", "charity", "cooking", "relaxation", "music", "busywork"];

    public function isAllowedActivity($activity) {
        if (!in_array($activity, $this->allowedActivities)) {
            throw new InvalidActivityException();
        }
        return true;
    }
}