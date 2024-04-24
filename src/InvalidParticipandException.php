<?php
namespace TontiLagunaPrime;

class InvalidParticipandException extends \Exception
{
    public function errorMessage() {
        return "Ошибка: Неверное значение!.";
    }
}