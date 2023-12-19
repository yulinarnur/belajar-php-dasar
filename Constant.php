<?php

// variable di php sifatnya mutable, bisa diubah.
// jika tidak ingin mengubah value dari variable, sebagai gantinya menggunakan fitur constant
// untuk membuat constant bisa menggunakan function degine()
// best practice pembuatan nama constan yaitu UPPER_CASE

define("AUTHOR", "Yulinar Nur Rahmawati");
define("APP_VERSION", 100);

echo "Author : ";
echo AUTHOR;
echo "\n";

echo "App Version : ";
echo APP_VERSION;
echo "\n";

// constant sifatnya imutable, tidak bisa diubah lagi jika sudah di deklerasikan