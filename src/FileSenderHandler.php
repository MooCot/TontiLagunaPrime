<?php

namespace TontiLagunaPrime;

class FileSenderHandler implements SenderHandler
{
    public function handle(Sender $sender)
    {
        if ($sender->fileSender == true)
        {
            $this->saver->save($ansver);
        }
        elseif ($this->successor !== null)
        {
            $this->successor->handle($sender);
        }
    }
}
