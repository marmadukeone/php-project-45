<?php

namespace BrainGames\Chet;

require_once __DIR__ . '/../../vendor/autoload.php';
require_once 'Cli.php';
require_once __DIR__ . '/../engine.php';

use function cli\line;
use function cli\prompt;

function gameIsChet()
{
    $userName = greetingAndGetName();
    line('Answer "yes" if the number is even, otherwise answer "no".');
    $isContinue = true;
    $countSuccesAnswer = 0;
    while ($isContinue) {
        $value = random_int(1, 20);
        $correctAnswer = ($value % 2) === 0 ? 'yes' : 'no';
        giveQuestion($value);
        $userAnswer = getAnswer();
        $isTrueAnswer = compareAnswer($userAnswer, $correctAnswer, $userName);
        if ($isTrueAnswer) {
            $countSuccesAnswer++;
            $isContinue = isTheSuccessEnd($countSuccesAnswer, $userName);
        } else {
            $isContinue = false;
        }
    }
}
