<?php
namespace TontiLagunaPrime\Exception;

class InvalidParticipandException extends \Exception
{
    public function errorMessage()
    {
        return "Ошибка: Неверное значение!.";
    }
}