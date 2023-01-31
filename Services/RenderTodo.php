<?php

function render_todo(): void
{
  global $todos;

  if (sizeof($todos) !== 0) {
    echo "Daftar todo yang harus dilakukan: " . PHP_EOL;
    foreach ($todos as $id => $todo) {
      echo "{$id}. $todo" . PHP_EOL;
    }
  } else {
    echo "Tidak terdapat todo yang harus dilakukan" . PHP_EOL;
  }
}
