<?php

require_once __DIR__ . '/../../../../index.php';

use App\DesignPatterns\Creational\Singleton\Singleton;

$singleton1 = Singleton::getInstance();
$singleton2 = Singleton::getInstance();
$singleton3 = Singleton::getInstance();
$singleton4 = Singleton::getInstance();


if (
    $singleton1 === $singleton2
    && $singleton2 === $singleton3
    && $singleton3 === $singleton4
) {
    echo " [*] :) Ambas as instâncias são iguais\n";
} else {
    echo " [ ] :( As instâncias são diferentes\n";
}
