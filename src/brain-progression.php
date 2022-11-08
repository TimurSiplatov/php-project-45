<?php

namespace BrainGames\brain_progression;

use function BrainGames\Cli\welcome;
use function cli\line;
use function cli\prompt;

function startProgression()
{
    $name = welcome();
    line('What number is missing in the progression?');
    for ($i = 0; $i < 3; $i++) {
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
        $progression[$correctNumber] = '..';
        $progressionStr = implode(" ", $progression);
        line("Question: {$progressionStr}");
        $answer = prompt("Your answer");
        if ((int) $answer === $correctAnswer) {
            line("Correct!");
        } else {
            line("'{$answer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'.");
            return line("Let's try again, {$name}!");
        }
    }
    line("Congratulations, {$name}!");
}
