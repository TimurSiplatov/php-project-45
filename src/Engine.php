<?php

namespace BrainGames\Engine;

use function BrainGames\Cli\welcome;
use function cli\line;
use function cli\prompt;

function isEven()
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

function Calc()
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

function gcd()
{
    $name = welcome();
    line('Find the greatest common divisior of given numbers.');
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

function progression()
{
    $name = welcome();
    line('What number is missing in the progression?');
    for ($i = 0; $i < 3; $i++) {
        $progressionStep = rand(1, 10);
        $firstNumber = rand(0, 50);
        $firstNumber1 = $firstNumber;
        $progression = [];
        for ($j = 0; $j < 10; $j++) {
            $progression[] = $firstNumber;
            $firstNumber += $progressionStep;
        }
        $correctNumber = array_rand($progression);
        $correctAnswer = $firstNumber1 + ($progressionStep * ($correctNumber));
        $progression[$correctNumber] = '..';
        $progressionStr = implode(" ", $progression);
        line("Question: {$progressionStr}");
        $answer = prompt("Your answer");
        if ((int) $answer === $correctAnswer) {
            line("Correct!");
        } else {
            line("'{$answer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'.");
            return line("Let's try again, {$name}!");
        }
    }
    line("Congratulations, {$name}!");
}

function isPrime()
{
    $name = welcome();

    line('Answer "yes" if given number is prime. Otherwise answer "no".');
    for ($i = 0; $i < 3; $i++) {
        $number = rand(0, 101);
        $correctAnswer = "yes";
        for ($j = 2; $j < $number; $j++) {
            if ($number % $j === 0) {
                $correctAnswer = "no";
                break;
            }
        }
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
