<?php

namespace BrainGames\Games\BrainPrime;

use function BrainGames\Engine\runGame;

const GAME_DESCRIPTION = 'Answer "yes" if given number is prime. Otherwise answer "no".';

function isPrime(int $number): bool
{
    $correctAnswer = true;
    for ($i = 2; $i < $number; $i++) {
        if ($number % $i === 0) {
            $correctAnswer = false;
            break;
        }
    }
    return $correctAnswer;
}

function startPrime()
{
    $gameLogic = function () {
        $number = rand(1, 101);
        $correctAnswer = isPrime($number) ? "yes" : "no";
        return [$number, $correctAnswer];
    };
    runGame(GAME_DESCRIPTION, $gameLogic);
}
