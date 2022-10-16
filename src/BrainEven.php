<?php

namespace BrainGames\BrainEven;

use function cli\line;
use function cli\prompt;

function isEven()
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line('Answer "yes" if the number is even, otherwise answer "no".');
    for ($i = 0; $i < 3; $i++) {
        $number = rand(0, 100);
        line("Question: {$number}");
        $answer = prompt('Your answer');
        if (($number % 2 === 0) && ($answer === "yes")) {
            line('Correct!');
        } elseif (($number % 2 !== 0) && ($answer === "no")) {
            line('Correct!');
        } else {
            if ($answer === 'yes') {
                line("'{$answer}' is wrong answer ;(. Correct answer was 'no'.");
                return line("Let's try again, {$name}!");
            } else {
                line("'{$answer}' is wrong answer ;(. Correct answer was 'yes'.");
                return line("Let's try again, {$name}!");
            }
            
        }
    }
    line("Congratulations, {$name}!");
}
