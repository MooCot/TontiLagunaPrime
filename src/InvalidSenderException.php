<?php
namespace TontiLagunaPrime;

class InvalidSenderException extends \Exception
{
    public function errorMessage() {
        return "Вывод недопустим.";
    }
}