<?php

declare(strict_types=1);

namespace App\Behavioral\Command;

/**
 * 
 * Concrete Command Class
 * 
 * Implementa a interface Command e associa-se a um Receiver (Receptor), 
 * invocando uma ou mais ações no Receiver.
 */
class TurnOffCommand implements Command
{
    private $light;

    public function __construct(Light $light)
    {
        $this->light = $light;
    }

    public function execute(): void
    {
        $this->light->turnOff();
    }
}
