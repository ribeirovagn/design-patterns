<?php

declare(strict_types=1);

namespace App\Behavioral\Visitor;

interface Visitor
{
    public function visit(): void;
}
