<?php

clear_screen();
render_header();

$todo = input("Masukan todo: ");
add_todo($todo);

clear_screen();
render_header();

echo "Berhasil menambahkan '{$todo}' baru ke daftar todo." . PHP_EOL;
wait("Tekan enter untuk lanjut...");
