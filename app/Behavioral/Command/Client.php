<?php

declare(strict_types=1);

require_once __DIR__ . "/../../../index.php";

use App\Behavioral\Command\Light;
use App\Behavioral\Command\RemoteControl;
use App\Behavioral\Command\TurnOffCommand;
use App\Behavioral\Command\TurnOnCommand;

/**
 * 
 * Client
 * Cria um objeto Command e define o Receiver associado.
 */
$light = new Light();

$turnOnCommand = new TurnOnCommand($light);
$turnOffcommand = new TurnOffCommand($light);
$remoteControl = new RemoteControl();

// Liga a luz
$remoteControl->setCommand($turnOnCommand);
$remoteControl->pressButton();

// Desliga a luz
$remoteControl->setCommand($turnOffcommand);
$remoteControl->pressButton();
