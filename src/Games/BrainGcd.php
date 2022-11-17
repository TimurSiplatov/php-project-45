<?php

namespace BrainGames\Games\BrainGcd;

use function BrainGames\Engine\runGame;

const GAME_DESCRIPTION = 'Find the greatest common divisor of given numbers.';

function startGcd()
{
    $gameLogic = function () {
        $firstNumber = rand(0, 100);
        $secondNumber = rand(0, 100);
        $questionForPlayer = "{$firstNumber} {$secondNumber}";
        while ($firstNumber != $secondNumber) {
            if ($firstNumber > $secondNumber) {
                $firstNumber = $firstNumber - $secondNumber;
            } else {
                $secondNumber = $secondNumber - $firstNumber;
            }
        } $correctAnswer = (string) $secondNumber;
        return [$questionForPlayer, $correctAnswer];
    };
    runGame(GAME_DESCRIPTION, $gameLogic);
}
