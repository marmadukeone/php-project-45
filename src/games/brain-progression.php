<?php

namespace BrainGames\Progression;

require_once __DIR__ . '/../../vendor/autoload.php';
require_once 'Cli.php';
require_once __DIR__ . '/../engine.php';

use function cli\line;
use function cli\prompt;


function gameIsProgression()
{
    $userName = greetingAndGetName();
    line('What number is missing in the progression?');
    $sizeArray = 10;
    $isContinue = true;
    $countSuccessAnswer = 0;
    while ($isContinue) {
        $array = createAndFillArrayRand($sizeArray);
        $indexRemove = random_int(0,9);
        $correctAnswer = (string) $array[$indexRemove];
        $array[$indexRemove] = '..';
        $value = implode (' ', $array);
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

function createAndFillArrayRand (int $sizeArray):array
{
    $step = random_int(1,5);
    $resArr = [];
    $resArr[0] = random_int(0,10);
    for($i = 1; $i < $sizeArray; $i++) {
        $resArr[$i] = $resArr[0] + $step * $i;
    }
    return $resArr;
}



