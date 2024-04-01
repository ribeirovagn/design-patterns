<?php

declare(strict_types=1);

namespace App\Behavioral\Command;

/**
 * Invoker Class
 * Classe que solicita a execução do comando
 */
class RemoteControl
{
    private $command;

    public function setCommand(Command $command)
    {
        $this->command = $command;
    }

    public function pressButton()
    {
        $this->command->execute();
    }
}
