<?php

namespace BrainGames\Games\BrainEven;

use function BrainGames\Engine\makeGame;

function startEven()
{
    $gameDescriprion = 'Answer "yes" if the number is even, otherwise answer "no".';
    $gameLogic = function () {
        $number = rand(0, 100);
        ($number % 2 === 0) ? $correctAnswer = "yes" : $correctAnswer = "no";
        $questionForPlayer = $number;
        return [$questionForPlayer, $correctAnswer];
    };
    makeGame($gameDescriprion, $gameLogic);
}
