<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

const ROUNDS_COUNT = 3;

function runGame(string $gameDescriprion, callable $gameLogic)
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line($gameDescriprion);
    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
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
