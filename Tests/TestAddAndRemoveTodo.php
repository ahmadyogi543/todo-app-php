<?php

require_once "../Models/Todo.php";

require_once "../Services/AddTodo.php";
require_once "../Services/RemoveTodo.php";

add_todo("Belajar Python");
add_todo("Belajar TypeScript");
add_todo("Belajar Golang");
add_todo("Belajar Java");
add_todo("Belajar Ruby");
add_todo("Belajar Rust");

remove_todo(3);
remove_todo(5);

add_todo("Belajar C++");

var_dump($todos);
