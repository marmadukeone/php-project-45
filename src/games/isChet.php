<?php

namespace BrainGames\Chet;

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

function gameIsChet()
{
    $userName = greetingAndGetName();
    line('Answer "yes" if the number is even, otherwise answer "no"');
    $isContinue = true;
    $countSuccesAnswer = 0;
    while( $isContinue) {
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
