<?php

namespace BrainGames\Cli;

use function cli\line;
use function cli\prompt;

function welcome()
{
    line('Welcome to the Brain Games!');
    $GLOBALS['name'] = prompt('May I have your name?');
    line("Hello, %s!", $GLOBALS['name']);
    return $GLOBALS['name'];
}
