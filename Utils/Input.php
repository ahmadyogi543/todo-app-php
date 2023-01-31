<?php

function input(string $prompt): string
{
  echo $prompt;
  return trim(fgets(STDIN));
}
