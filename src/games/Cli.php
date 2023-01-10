<?php
namespace BrainGames\Cli;

require_once __DIR__ . '/../../vendor/autoload.php';
require_once __DIR__ . '/../engine.php';

function Gogreeting ()
{
    $name = greetingAndGetName();
}

