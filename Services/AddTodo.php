<?php

function add_todo(string $todo): void
{
  global $todos;
  $todos_length = count($todos) + 1;
  $todos[$todos_length] = $todo;
}
