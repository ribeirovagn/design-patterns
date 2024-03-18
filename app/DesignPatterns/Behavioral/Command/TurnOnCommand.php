<?php

declare(strict_types=1);

namespace App\DesignPatterns\Behavioral\Command;

/**
 * 
 * Concrete Command Class
 * 
 * Implementa a interface Command e associa-se a um Receiver (Receptor), 
 * invocando uma ou mais ações no Receiver.
 */
class TurnOnCommand implements Command
{
    private $light;

    public function __construct(Light $light)
    {
        $this->light = $light;
    }

    public function execute(): void
    {
        $this->light->turnOn();
    }
}
