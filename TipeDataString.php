<?php

// single quote '' : tidak bisa menggunakan escape sequence
// \t : tab, \n : enter

echo 'Name : ';
echo 'Yulinar Nur Rahmawati';
echo "\n";

echo "Name : ";
echo "Yulinar\t Nur\t Rahmawati\n";

// Multiline String : membuat data string yang lebih dari satu baris tanpa manual

// 1. Heredoc: untuk membuat string yg panjang tanpa perlu manual
echo <<<YULINAR
Selamat belajar PHP
sekarang, kita belajar tipe data string
ini adalah cara ke-3 membuat string
bisa menggunakan heredoc
YULINAR;


// 2. Nowdoc: tidak memiliki kemampuan parsing seperti di heredoc atau double quote
// diibiratkan nowdoc sepeti single quote
echo <<<'YULINAR'
Selamat belajar PHP
sekarang, kita belajar tipe data string
ini adalah cara ke-4 membuat string
bisa menggunakan nowdoc
YULINAR;

