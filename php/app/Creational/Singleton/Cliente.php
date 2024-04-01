<?php

require_once __DIR__ . '/../../../index.php';

use App\Creational\Singleton\Singleton;

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


echo "\n [*] Testando se o numero aleatorio é o mesmo em ambas as instâncias\n";

$singleton4->setRandNumber();

$randNumber1 = $singleton1->getRandNumber();
$randNumber2 = $singleton2->getRandNumber();
$randNumber3 = $singleton3->getRandNumber();
$randNumber4 = $singleton4->getRandNumber();

if ($randNumber1 === $randNumber4) {
    echo " [*] É o mesmo numero\n";
} else {
    echo " [ ] É o mesmo numero\n";
}

echo "     * Intancia 1 = " . $randNumber1 . "\n";
echo "     * Intancia 2 = " . $randNumber2 . "\n";
echo "     * Intancia 3 = " . $randNumber3 . "\n";
echo "     * Intancia 4 = " . $randNumber4 . "\n";
