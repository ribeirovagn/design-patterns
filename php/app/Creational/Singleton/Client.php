<?php

require_once __DIR__ . '/../../../index.php';

use App\Creational\Singleton\Singleton;

$singleton1 = Singleton::getInstance();
$singleton2 = Singleton::getInstance();
$singleton3 = Singleton::getInstance();
$singleton4 = Singleton::getInstance();

echo "\nSINGLETON Pattern \n\n";

if (
    $singleton1 === $singleton2
    && $singleton2 === $singleton3
    && $singleton3 === $singleton4
) {
    echo " [*] :) Ambas as instâncias são iguais\n";
} else {
    echo " [ ] :( As instâncias são diferentes\n";
}


$singleton4->setRandNumber();
echo "\n [*] Testando se o número " . $singleton4->getRandNumber() . " é o mesmo em ambas as instâncias:\n";


$randNumber1 = $singleton1->getRandNumber();
$randNumber2 = $singleton2->getRandNumber();
$randNumber3 = $singleton3->getRandNumber();
$randNumber4 = $singleton4->getRandNumber();

if ($randNumber1 === $randNumber4) {
    echo " [*] É o mesmo número\n";
} else {
    echo " [ ] É o mesmo número\n";
}

echo "     * Intância 1 = " . $randNumber1 . "\n";
echo "     * Intância 2 = " . $randNumber2 . "\n";
echo "     * Intância 3 = " . $randNumber3 . "\n";
echo "     * Intância 4 = " . $randNumber4 . "\n";

echo "\n=====================================\n";
