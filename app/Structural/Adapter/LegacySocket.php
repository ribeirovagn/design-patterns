<?php

declare(strict_types=1);

namespace App\Structural\Adapter;

/**
 * 
 * Simula uma tomada antiga (2 pinos)
 */
class LegacySocket implements Socket
{
    public function plug(): void
    {
        echo " [*] Tomada antiga (2 pinos)\n";
    }
}
