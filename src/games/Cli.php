<?php
namespace BrainGames\Cli;

require_once 'vendor/autoload.php';
require_once 'src/games/Cli.php';
require_once 'src/engine.php';

function Gogreeting ()
{
    $name = greetingAndGetName();
}

