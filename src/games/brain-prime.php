<?php

namespace BrainGames\Prime;

require_once __DIR__ . '/../../vendor/autoload.php';
require_once 'Cli.php';
require_once __DIR__ . '/../engine.php';

use function cli\line;
use function cli\prompt;


function gameIsPrime()
{
    $userName = greetingAndGetName();
    line('Answer "yes" if given number is prime. Otherwise answer "no".');
    $isContinue = true;
    $countSuccessAnswer = 0;
    while ($isContinue) {
        $value = random_int(2,101);
        $correctAnswer = isPrime($value);

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
function isPrime(int $inputNumber):string
{
    $i = 2;
    while ($i < $inputNumber) {
        if ($inputNumber % $i === 0) return 'no';
        $i++;
    }
    return 'yes';
}





