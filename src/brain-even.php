<?php

namespace BrainGames\brain_even;

use function BrainGames\Cli\welcome;
use function cli\line;
use function cli\prompt;

function startEven()
{
    $name = welcome();
    line('Answer "yes" if the number is even, otherwise answer "no".');
    for ($i = 0; $i < 3; $i++) {
        $number = rand(0, 100);
        ($number % 2 === 0) ? $correctAnswer = "yes" : $correctAnswer = "no";
        line("Question: {$number}");
        $answer = prompt('Your answer');
        if ($answer === $correctAnswer) {
            line('Correct!');
        } else {
            line("'{$answer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'.");
            return line("Let's try again, {$name}!");
        }
    }
    line("Congratulations, {$name}!");
}
