<?php
namespace TontiLagunaPrime;

class InvalidActivityException extends \Exception
{
    public function errorMessage() {
        return "Активность недопустима.";
    }
}