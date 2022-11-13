<?php

namespace BrainGames\Engine;

use function BrainGames\Cli\welcome;
use function cli\line;
use function cli\prompt;

const PLAY_TIMES = 3;

function makeGame(string $gameDescriprion, callable $gameLogic)
{
    $name = welcome();
    line($gameDescriprion);
    for ($i = 0; $i < PLAY_TIMES; $i++) {
        [$questionForPlayer, $correctAnswer] = $gameLogic();
        line("Question: {$questionForPlayer}");
        $playerAnswer = prompt('Your answer');
        if ($playerAnswer === $correctAnswer) {
            line('Correct!');
        } else {
            line("'{$playerAnswer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'.");
            return line("Let's try again, {$name}!");
        }
    }
    line("Congratulations, {$name}!");
}
