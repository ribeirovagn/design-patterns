<?php

declare(strict_types=1);

namespace App\Behavioral\Command;

/**
 * 
 * Command
 * Define uma interface para executar uma ação.
 */
interface Command
{
    public function execute(): void;
}
