<?php

namespace BrainGames\brain_prime;

use function BrainGames\Cli\welcome;
use function cli\line;
use function cli\prompt;

function startPrime()
{
    $name = welcome();
    for ($i = 0; $i < 3; $i++) {
        $number = rand(1, 101);
        $correctAnswer = "yes";
        for ($j = 2; $j < $number; $j++) {
            if ($number % $j === 0) {
                $correctAnswer = "no";
                break;
            }
        }
        line('Answer "yes" if given number is prime. Otherwise answer "no".');
        line("Question: {$number}");
        $answer = prompt("Your answer");
        if ($answer === $correctAnswer) {
            line('Correct!');
        } else {
            line("'{$answer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'.");
            return line("Let's try again, {$name}!");
        }
    }
    line("Congratulations, {$name}!");
}
