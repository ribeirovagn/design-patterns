<?php

declare(strict_types=1);

namespace App\Structural\Adapter;

class LegacyPlug implements LegacySocket
{
    public function plug(): void
    {
        echo " [*] Tomada antiga (2 pinos) conectada!\n";
    }
}
