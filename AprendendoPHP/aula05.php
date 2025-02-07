<?php

// Primeiro Exec
//
$array = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K'];

$keys = array_keys($array);

//print_r($keys);

// Segundo Exec
//
$arr1 = [1, 2, 3, 4, 5, 6];
$arr2 = [7, 8, 9, 10, 11, 12];

$merg = array_merge($arr1, $arr2);

//var_dump($merg);

// Terceiro Exec
//
array_push($array, 'L', 'M');

//print_r($array);

// Quarto Exec
//
$ar1 = ['A', 'B', 'C', 'D', 'E'];
$ar2 = [1, 2, 3, 4, 5];


$comb = array_combine($ar1, $ar2);

//print_r($comb);

// Quinto Exec
//
$arrNum = [1, 2, 3, 4];

$som = array_sum($arrNum);

//print_r($som);

// Sexto Exec
//
$var = 'Pedro, Julio, Joao, Wally, Caio';

$exp = explode(', ', $var);

//var_dump($exp);

// Setimo Exec
//
$imp = implode(', ', $exp);

print_r($imp);

// Oitavo Exec
//
function cube($n) {
    return ($n * $n * $n);
}

$numArr = [2, 4, 6, 8, 10];

$dob = array_map('cube', $numArr);
?>