<?php
// Pertemuan 2 - PHP dasar
// Sintaks PHP

// Standar output
//echo, print
//print_r
//var_dump
echo "Ibrahim Nagib";
print('Ibrahim');
print_r('Ibrahim');
var_dump('Ibrahim');
echo true;
echo 123;
echo false;

// penulisan sintaks php
// 1. php didalam html
// 2. html didalam php

// variable dan tipe data
// variable
$nama = "Ibrahim";

// operator
// aritmatika
$x = 10;
$y = 20;
echo $x + $y;

// penggabung string / concatenation / concat
$nama_depan = "Ibrahim";
$nama_belakang = "Nagib";
echo $nama_depan . ' ' . $nama_belakang;

// ASSIGNMENT / PENUGASAN
// =, +=, -=, *=, /=, %=, .=
$z = 1;
$z -= 5;
echo $z;
$name = "Ibrahim";
$name .= " ";
$name .= "Nagib";
echo $name;

// PERBANDINGAN / COMPARATION
// ==, <=, >=, <, >, !=
var_dump(1 > 5);
var_dump(1 > '5');

// IDENTITAS / STRICT COMPARATION
// ===, !==
var_dump(1 === '1');

// LOGIKA / LOGICAL
// &&, ||, !
$c = 10;
var_dump($c < 20 && $c % 2 == 0);
var_dump($c < 20 || $c % 2 == 0);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>

<body>
    <h1><?php echo "Halo saya $nama"; ?></h1>
    <?php echo '<h2>Nagib</h2>'; ?>
</body>

</html>