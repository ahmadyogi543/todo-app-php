<?php

function wait(string $prompt): void
{
  echo PHP_EOL . $prompt;
  trim(fgets(STDIN));
}
