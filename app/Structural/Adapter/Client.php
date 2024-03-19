<?php

require __DIR__ . '/../../../index.php';

use App\Structural\Adapter\LegacySocket;
use App\Structural\Adapter\TreePinSocketAdapter;
use App\Structural\Adapter\TreePinSocket;

echo " [*] Iniciando...\n";

$tomadaAntiga = new LegacySocket();
$tomadaAntiga->plug();
$tomadaModerna = new TreePinSocket();
$adaptador = new TreePinSocketAdapter($tomadaModerna);
$adaptador->plug();
