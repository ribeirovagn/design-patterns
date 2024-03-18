<?php

declare(strict_types=1);

namespace App\DesignPatterns\Behavioral\Command;

/**
 * 
 * Receiver class
 * Sabe como executar as operações associadas a uma solicitação. 
 * Qualquer classe pode servir como Receptor.
 */
class Light
{

    public function turnOn(): void
    {
        echo " [*] Luz ligada.\n";
    }

    public function turnOff(): void
    {
        echo " [*] Luz desligada.\n";
    }
}
