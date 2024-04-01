<?php

require __DIR__ . '/../../../index.php';

use App\Structural\Adapter\LegacyPlug;
use App\Structural\Adapter\ModernPlug;
use App\Structural\Adapter\ModernPlugAdapter;

echo "\nADAPTER Pattern \n\n";

echo " [*] Iniciando...\n";

$tomadaAntiga = new LegacyPlug();
$tomadaAntiga->plug();

echo " [*] Adaptando...\n";

$tomadaModerna = new ModernPlug();
$adaptador = new ModernPlugAdapter($tomadaModerna);
$adaptador->plug();

echo "\n=====================================\n";
