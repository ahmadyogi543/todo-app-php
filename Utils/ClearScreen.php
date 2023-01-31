<?php

function clear_screen(): void
{
  $command = "clear";
  if (str_contains(PHP_OS, "WIN")) {
    $command = "cls";
  }
  system($command);
}
