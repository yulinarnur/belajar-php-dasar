<?php

// di php, kalo misal tipe data awal adalah string. maka untuk code selanjutnya
// apabila ada perbuahan tipe data, maka diperbolehkan. kecuali di bahasa C
$name = "Yulinar";
$age = 22;

echo "Name : ";
echo $name;
echo "\n";

echo "Age : ";
echo $age;
echo "\n";

// Variable Variables
// PHP memiliki kemampuan variable variables, yaitu membuat variable dari string value variable
// disarankan untuk tidak menggunakan fitur ini kecuali memang diperlukan, karena membingungkan kode program
$contoh = "yulinar";
$$contoh = "rahmawati";

echo "Contoh : ";
echo $contoh;
echo "\n";

echo "yulinar : ";
echo $yulinar;
echo "\n";