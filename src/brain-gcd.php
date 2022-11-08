<?php

namespace BrainGames\brain_gcd;

use function BrainGames\Cli\welcome;
use function cli\line;
use function cli\prompt;

function startGcd()
{
    $name = welcome();
    line('Find the greatest common divisor of given numbers.');
    for ($i = 0; $i < 3; $i++) {
        $firstNumber = rand(0, 100);
        $secondNumber = rand(0, 100);
        line("Question: {$firstNumber} {$secondNumber}");
        while ($firstNumber != $secondNumber) {
            if ($firstNumber > $secondNumber) {
                $firstNumber = $firstNumber - $secondNumber;
            } else {
                $secondNumber = $secondNumber - $firstNumber;
            }
        } $correctAnswer = $secondNumber;
        $answer = prompt('Your answer');
        if ((int) $answer === $correctAnswer) {
            line('Correct!');
        } else {
            line("'{$answer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'.");
            return line("Let's try again, {$name}!");
        }
    }
    line("Congratulations, {$name}!");
}
