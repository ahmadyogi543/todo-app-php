<?php

clear_screen();
render_header();

render_todo();

if (count($todos) !== 0) {
  echo PHP_EOL;
  $id = input("Masukan id todo yang ingin dihapus: ");

  clear_screen();
  render_header();

  if (remove_todo($id)) {
    echo "Berhasil menghapus todo dengan id: {$id}" . PHP_EOL;
  } else {
    echo "Gagal menghapus todo dengan id: {$id}" . PHP_EOL;
  }
}

wait("Tekan enter untuk lanjut...");
