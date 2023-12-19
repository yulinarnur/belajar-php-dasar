<?php

// bilang bulat : integer
// bilangan pecarahan : floating point

// var_dump: untuk mengecek tipe data
// basis 10
echo "Decimal : ";
var_dump(1234);

// basis 8
echo "Octal : ";
var_dump(01234);

// basis 16
echo "Hexadecimal : ";
var_dump(0x1A);

// basis 2
echo "Binary : ";
var_dump(0b11111);

echo "Underscore in number";
var_dump(1_200_000);

echo "Floatin point : ";
var_dump(1.234);

// e3 itu seperti 1000 (0 nya ada 3)
echo "Floatin point dengan E Notation : (1.7 x 1000) : ";
var_dump(1.7e2);

echo "Floatin point dengan E Notation minus : (1.7 x 0.001) : ";
var_dump(1.7e-3);



// integer overflow
// integer ada batasannya, apabila melebihi batas itu maka secara otomatis
// php akan mengkonversi menjadi floating point 
echo "Integer Overflow : ";
var_dump(9223372036854775807);
var_dump(9223372036854775808); //berubah jadi float