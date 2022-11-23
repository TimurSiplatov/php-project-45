<?php

namespace BrainGames\Games\BrainEven;

use function BrainGames\Engine\runGame;

const GAME_DESCRIPTION = 'Answer "yes" if the number is even, otherwise answer "no".';

function isEven(int $number): bool
{
    return $number % 2 === 0;
}

function startEven()
{
    $gameLogic = function () {
        $number = rand(0, 100);
        $correctAnswer = isEven($number) ? "yes" : "no";
        return [$number, $correctAnswer];
    };
    runGame(GAME_DESCRIPTION, $gameLogic);
}
