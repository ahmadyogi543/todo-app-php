<?php

require_once "./Models/Todo.php";

require_once "./Services/AddTodo.php";
require_once "./Services/RemoveTodo.php";
require_once "./Services/RenderTodo.php";

require_once "./Utils/ClearScreen.php";
require_once "./Utils/Wait.php";
require_once "./Utils/Input.php";

require_once "./Views/ViewHeader.php";


$is_run = true;

while ($is_run) {
  clear_screen();
  render_header();

  echo "Silahkan pilih menu berikut: " . PHP_EOL;
  echo "1. Tampilkan semua todo" . PHP_EOL;
  echo "2. Tambah todo baru" . PHP_EOL;
  echo "3. Hapus todo (berdasarkan id)" . PHP_EOL;
  echo "4. Keluar" . PHP_EOL;
  echo PHP_EOL;

  $user_choice = input("Pilih menu: ");
  switch ($user_choice) {
    case '1':
      include "./Views/ViewShowTodoList.php";
      break;
    case '2':
      include "./Views/ViewAddTodoList.php";
      break;
    case '3':
      include "./Views/ViewRemoveTodoList.php";
      break;
    case '4':
      $is_run = false;
      clear_screen();
      break;
    default:
      clear_screen();
      render_header();
      echo "Menu yang Anda pilih salah, silahkan ulang kembali." . PHP_EOL;
      wait("Press enter to continue...");
      break;
  }
}
