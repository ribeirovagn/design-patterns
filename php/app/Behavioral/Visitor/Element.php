<?php

declare(strict_types=1);

namespace App\Behavioral\Visitor;

interface Element
{
    public function accept(Visitor $visitor): void;
}
