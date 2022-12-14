<?php

namespace BrainGames\Games\BrainProgression;

use function BrainGames\Engine\runGame;

const GAME_DESCRIPTION = 'What number is missing in the progression?';

function startProgression()
{
    $gameLogic = function () {
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
        $correctAnswer = (string) $correctAnswer;
        $progression[$correctNumber] = '..';
        $questionForPlayer = implode(" ", $progression);
        return [$questionForPlayer, $correctAnswer];
    };
    runGame(GAME_DESCRIPTION, $gameLogic);
}
