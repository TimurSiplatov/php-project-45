<?php

namespace BrainGames\Games\BrainCalc;

use function BrainGames\Engine\runGame;

const GAME_DESCRIPTION = 'What is the result of the expression?';

function startCalc()
{
    $gameLogic = function () {
        $operations = ["+", "-", "*"];
        $firstNumber = rand(0, 20);
        $secondNumber = rand(0, 20);
        $operator = $operations[array_rand($operations)];
        $questionForPlayer = "{$firstNumber} {$operator} {$secondNumber}";
        $correctAnswer = (string) calculate($operator, $firstNumber, $secondNumber);
        return [$questionForPlayer, $correctAnswer];
    };
    runGame(GAME_DESCRIPTION, $gameLogic);
}

function calculate(string $operator, int $firstNumber, int $secondNumber): int
{
    switch ($operator) {
        case "+":
            $correctAnswer = $firstNumber + $secondNumber;
            break;
        case "-":
            $correctAnswer = $firstNumber - $secondNumber;
            break;
        case "*":
            $correctAnswer = $firstNumber * $secondNumber;
            break;
        default:
            $correctAnswer = null;
    }
    return $correctAnswer;
}
