<?php

namespace BrainGames\Cli;

require_once 'vendor/autoload.php';


use function cli\line;
use function cli\prompt;
//use cli;


function askName()
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    return $name;
}
