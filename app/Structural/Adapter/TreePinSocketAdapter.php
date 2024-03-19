<?php

declare(strict_types=1);

namespace App\Structural\Adapter;

class TreePinSocketAdapter implements Socket
{
    private TreePinSocket $treePinSocket;

    public function __construct(TreePinSocket $treePinSocket)
    {
        $this->treePinSocket = $treePinSocket;
    }

    public function plug(): void
    {
        $this->treePinSocket->connectPlug();
        echo " [*] Adaptador plugado!\n";
    }
}
