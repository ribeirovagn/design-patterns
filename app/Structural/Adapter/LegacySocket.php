<?php

declare(strict_types=1);

namespace App\Structural\Adapter;

/**
 * 
 * Simula uma tomada morderna (3 pinos)
 */
interface LegacySocket
{
    public function plug(): void;
}
