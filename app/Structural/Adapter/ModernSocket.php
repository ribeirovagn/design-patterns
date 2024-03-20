<?php

declare(strict_types=1);

namespace App\Structural\Adapter;

/**
 * 
 * Simula uma tomada antiga (3 pinos)
 */
interface ModernSocket
{
    public function connect(): void;
}
