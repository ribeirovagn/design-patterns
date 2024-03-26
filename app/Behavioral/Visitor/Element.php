<?php

namespace App\Behavioral\Visitor;

interface Element
{
    public function accept(Visitor $visitor): void;
}
