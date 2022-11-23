<?php

namespace BrainGames\Chet;

require_once 'vendor/autoload.php';
//require_once 'src/Cli.php';

//use function BrainGames\Cli\askName;
use function cli\line;
use function cli\prompt;
//use cli;


function isChet(string $inputName)
{
    //Необходимо реализовать игру "Проверка на чётность". Суть игры в следующем:
    // пользователю показывается случайное число. И ему нужно ответить yes, если число чётное,
    // или no — если нечётное:
    // В случае, если пользователь даст неверный ответ, необходимо завершить игру и вывести сообщение:
    //'yes' is wrong answer ;(. Correct answer was 'no'.
    //Let's try again, Bill!
    //В случае, если пользователь ввёл верный ответ, нужно отобразить:
    // Correct!
    // Пользователь должен дать правильный ответ на три вопроса подряд. После успешной игры нужно вывести:
    // Congratulations, Bill!

    line('Answer "yes" if the number is even, otherwise answer "no"');
    $isExit = true;
    $countSucces = 0;
    while( $isExit) {
        $chislo = random_int(1,20);
        $isChisloChet = ($chislo % 2 === 0) ? TRUE: FALSE;
        $correctAnswer = $isChisloChet ? 'yes': 'no';
        line("Question: {$chislo}");
        $answer = strtolower(prompt('Your answer: '));
        //$answerToBool = ($answer === 'yes') ? TRUE: FALSE;
        if ($answer === $correctAnswer) {
            line("Correct!");
            $countSucces++;
            if ($countSucces === 3) {
                line("Congratulations, {$inputName}!");
                $isExit = false;
            }
        } else {
            //'yes' is wrong answer ;(. Correct answer was 'no'.
            //Let's try again, Bill!
            line("'{$answer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'");
            line("Let's try again, {$inputName}!");
            $isExit = false;
        }





    }

    //$name = prompt('May I have your name?');
    //line("Hello, %s!", $name);



}
