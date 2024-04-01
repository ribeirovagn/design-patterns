<?php

declare(strict_types=1);

namespace App\Structural\Adapter;

/**
 *
 * Adaptee
 * É a classe que possui a interface incompatível que precisa ser adaptada para ser compatível com a interface do cliente.
 * 
 * Simula uma tomada moderna de 3 pinos
 */

class ModernPlug implements ModernSocket
{

    public function connect(): void
    {
        echo " [*] Tomada moderna (3 pinos) conectada!\n";
    }
}
