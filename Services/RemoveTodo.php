<?php

function remove_todo($id): bool
{
  global $todos;

  if ($id <= 0 || $id > count($todos)) {
    return false;
  }

  for ($i = $id; $i < count($todos); $i++) {
    $todos[$i] = $todos[$i + 1];
  }
  // unset($todos[count($todos)]);
  unset($todos[count($todos)]);

  return true;
}
