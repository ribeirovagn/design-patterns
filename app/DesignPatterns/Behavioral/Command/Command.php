<?php

declare(strict_types=1);

namespace App\DesignPatterns\Behavioral\Command;

interface Command
{
    public function execute(): void;
}
