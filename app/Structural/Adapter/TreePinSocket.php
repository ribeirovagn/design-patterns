<?php

declare(strict_types=1);

namespace App\Structural\Adapter;

/**
 *
 * Adaptee
 * 
 * Simula uma tomada moderna de 3 pinos
 * 
 */

class TreePinSocket
{

    public function connectPlug(): void
    {
        echo " [*] Tomada moderna (3 pinos)\n";
    }
}
