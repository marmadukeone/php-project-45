<?php

namespace BrainGames\Prime;

require_once 'vendor/autoload.php';
require_once 'src/games/Cli.php';
require_once 'src/engine.php';

use function cli\line;
use function cli\prompt;


function gameIsPrime()
{
    $userName = greetingAndGetName();
    line('What number is missing in the progression?');
    $isContinue = true;
    $countSuccessAnswer = 0;
    while ($isContinue) {

        $correctAnswer = 0;

        $value = 0;
        //line("{$value}");
        giveQuestion($value);
        $userAnswer = getAnswer();

        $isTrueAnswer = compareAnswer($userAnswer, $correctAnswer, $userName);
        if ($isTrueAnswer) {
            $countSuccessAnswer++;
            $isContinue = isTheSuccessEnd($countSuccessAnswer, $userName);
        } else {
            $isContinue = false;
        }
    }

}





