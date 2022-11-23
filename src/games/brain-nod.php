<?php

namespace BrainGames\Nod;

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

function gameIsNod()
{
    $userName = greetingAndGetName();
    line('Find the greatest common divisor of given numbers.');
    $isContinue = true;
    $countSuccessAnswer = 0;
    while ($isContinue) {
        $value1 = random_int(1, 30);
        $value2 = random_int(1, 30);
        $value = "{$value1} {$value2}";
        $correctAnswer = getNod($value1,$value2);
        giveQuestion($value);
        //line("{$correctAnswer}");
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

function getNod(int $value1, int $value2):string
{
    $lessvalue = $value1 < $value2 ? $value1 : $value2;
    $nod = 1;
    for ($i = 1; $i <= $lessvalue; $i++) {
        if (($value1 % $i === 0) && ($value2 % $i === 0)) {
            if ($i > $nod) $nod = $i;
        }
    }
    return $nod;
}

