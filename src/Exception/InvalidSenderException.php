<?php
namespace TontiLagunaPrime\Exception;

class InvalidSenderException extends \Exception
{
    public function errorMessage()
    {
        return "Вывод недопустим.";
    }
}