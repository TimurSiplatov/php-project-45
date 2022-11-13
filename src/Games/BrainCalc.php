<?php

namespace BrainGames\Games\BrainCalc;

use function BrainGames\Engine\makeGame;

function startCalc()
{
    $gameDescription = 'What is the result of the expression?';
    $gameLogic = function () {
        $operations = ["+", "-", "*"];
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
        $questionForPlayer = "{$firstNumber} {$operator} {$secondNumber}";
        $correctAnswer = (string) $correctAnswer;
        return [$questionForPlayer, $correctAnswer];
    };
    makeGame($gameDescription, $gameLogic);
}
