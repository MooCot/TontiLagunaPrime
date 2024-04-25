<?php
namespace TontiLagunaPrime\Exception;

class InvalidActivityException extends \Exception
{
    public function errorMessage()
    {
        return "Активность недопустима.";
    }
}