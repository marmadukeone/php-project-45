<?php

//namespace BrainGames\Engine;

require_once __DIR__ . '/../vendor/autoload.php';

use function cli\line;
use function cli\prompt;
function greetingAndGetName(): string
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    return $name;
}

function giveQuestion(string $valueQuestion)
{
    line("Question: {$valueQuestion}");
}

function getAnswer(): string
{
    return strtolower(prompt('Your answer'));
}

function compareAnswer(string $userAnswer, string $correctAnswer, string $userName): bool
{
    if ($userAnswer === $correctAnswer) {
        line("Correct!");
        return true;
    } else {
        line("'{$userAnswer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'");
        line("Let's try again, {$userName}!");
        return false;
    }
}

function isTheSuccessEnd(int $countSuccessAnswer, string $userName): bool
{
    if ($countSuccessAnswer === 3) {
        line("Congratulations, {$userName}!");
        return false;
    } else {
        return true;
    }
}
