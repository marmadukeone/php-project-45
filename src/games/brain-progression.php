<?php

namespace BrainGames\Progression;

require_once 'vendor/autoload.php';
require_once 'src/games/Cli.php';
require_once 'src/engine.php';

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\greetingAndGetName;
use function BrainGames\Engine\giveQuestion;
use function BrainGames\Engine\getAnswer;
use function BrainGames\Engine\compareAnswer;
use function BrainGames\Engine\isTheSuccessEnd;

function gameIsProgression()
{
    $userName = greetingAndGetName();
    line('What number is missing in the progression?');
    /*
    $isContinue = true;
    $countSuccessAnswer = 0;
    while ($isContinue) {
        $value1 = random_int(1, 20);
        $operandInt = random_int(1, 4);
        $value2 = random_int(1, 20);
        $value = getValueStr($value1, $value2, $operandInt);
        $correctAnswer = getValueFloat($value1, $value2, $operandInt);
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
    */
}


