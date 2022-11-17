<?php

namespace BrainGames\Games\BrainPrime;

use function BrainGames\Engine\runGame;

const GAME_DESCRIPTION = 'Answer "yes" if given number is prime. Otherwise answer "no".';

function startPrime()
{
    $gameLogic = function () {
        $number = rand(1, 101);
        $correctAnswer = true;
        for ($i = 2; $i < $number; $i++) {
            if ($number % $i === 0) {
                $correctAnswer = false;
                break;
            }
        }
        $correctAnswer ? $correctAnswer = "yes" : $correctAnswer = "no";
        $questionForPlayer = $number;
        return [$questionForPlayer, $correctAnswer];
    };
    runGame(GAME_DESCRIPTION, $gameLogic);
}
