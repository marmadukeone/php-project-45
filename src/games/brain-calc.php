<?php

namespace BrainGames\Calc;

require_once __DIR__ . '/../../vendor/autoload.php';
require_once __DIR__ . '/Cli.php';
require_once __DIR__ . '/../engine.php';

use function cli\line;
use function cli\prompt;

function gameIsCalc()
{
    $userName = greetingAndGetName();
    line('What is the result of the expression?');
    $isContinue = true;
    $countSuccessAnswer = 0;
    while ($isContinue) {
        $value1 = random_int(1, 20);
        $operandInt = random_int(1, 3);
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
}
function getValueStr ($value1, $value2, $operand):string
{
    switch ($operand) {
        case '1': return "{$value1} + {$value2}";
        case '2': return "{$value1} - {$value2}";
        case '3': return "{$value1} * {$value2}";
        default: return '';
    }
}
function getValueFloat ($value1, $value2, $operand):string
{
    switch ($operand) {
        case '1': return $value1 + $value2;
        case '2': return $value1 - $value2;
        case '3': return $value1 * $value2;
        default: return 0;
    }
}
