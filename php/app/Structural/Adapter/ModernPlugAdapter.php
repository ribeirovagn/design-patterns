<?php

declare(strict_types=1);

namespace App\Structural\Adapter;

/**
 * 
 * Adapter
 * 
 * É uma classe que faz a ponte entre a interface do cliente e a interface do serviço. 
 * Ela implementa a interface desejada pelo cliente e encapsula uma instância do objeto adaptado.
 */
class ModernPlugAdapter implements LegacySocket
{
    private ModernPlug $modernPlug;

    public function __construct(ModernPlug $modernPlug)
    {
        $this->modernPlug = $modernPlug;
    }

    public function plug(): void
    {
        echo " [*] Adaptador plugado!\n";
        $this->modernPlug->connect();
    }
}
