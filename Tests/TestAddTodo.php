<?php

require_once "../Models/Todo.php";

require_once "../Services/AddTodo.php";

add_todo("Learn JavaScript");
add_todo("Learn TypeScript");
add_todo("Learn Bulma");
add_todo("Learn Docker");

var_dump($todos);
