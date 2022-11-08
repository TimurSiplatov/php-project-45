<?php

namespace BrainGames\brain_calc;

use function BrainGames\Cli\welcome;
use function cli\line;
use function cli\prompt;

function startCalc()
{
    $name = welcome();
    $operations = ["+", "-", "*"];
    line('What is the result of the expression?');
    for ($i = 0; $i < 3; $i++) {
        $firstNumber = rand(0, 20);
        $secondNumber = rand(0, 20);
        $randomOperation = array_rand($operations);
        if ($randomOperation === 0) {
            $correctAnswer = $firstNumber + $secondNumber;
            $operator = "+";
        } elseif ($randomOperation === 1) {
            $correctAnswer = $firstNumber - $secondNumber;
            $operator = "-";
        } else {
            $correctAnswer = $firstNumber * $secondNumber;
            $operator = "*";
        }
        line("Question: {$firstNumber} {$operator} {$secondNumber}");
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
