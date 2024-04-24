<?php

namespace TontiLagunaPrime;


class ConsoleReader implements SenderHandler
{
    public function handle(Sender $sender)
    {
        if ($sender->consoleSender == true)
        {
            echo "Выполняем банковский перевод";
        }
        elseif ($this->successor !== null)
        {
            $this->successor->handle($sender);
        }
    }
}
