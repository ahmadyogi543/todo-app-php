<?php
require_once "../Models/Todo.php";

require_once "../Services/RemoveTodo.php";

$id = 4;
$is_removed = remove_todo($id);

if ($is_removed) {
  echo "The todo no. {$id} is successfully removed" . PHP_EOL;
} else {
  echo "The todo no. {$id} is unsuccessfully removed because there is no such todo" . PHP_EOL;
}

var_dump($todos);
