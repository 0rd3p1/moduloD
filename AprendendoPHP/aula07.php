<?php

// Primeiro Exec
//
$arrayN = [1, 2, 3, 4, 5];

$dobro = array_map(function ($n) {
    return $n * 2;
}, $arrayN);

//print_r($dobro);

// Segundo Exec
//
$filtro = array_filter($arrayN, function ($n) {
    return ($n % 2) == 0;
});

//print_r($filtro);

// Terceito Exec
//
$quadrado = array_map(function ($n) {
    return $n * $n;
}, $arrayN);

//print_r($quadrado);

// Quinto Exec
//
$arrayS = ['Pedro', 'Caio', 'Wallysom', 'Leo', 'Lorenzo'];

$ordemTam = uasort($arrayS, function ($a1, $a2) {
    return strlen($a1) - strlen($a2);
});

//print_r($arrayS);

// Sexto Exec
//
$num1 = 1;
$num2 = 2;

$soma = fn ($n1, $n2) => $n1 + $n2;

//echo $soma($num1, $num2);

// Sétimo Exec
//
$arrayP = [1, -3, -6, 3, -2, 10];

$fun = fn ($a) => ($a >= 0);

$positivo = array_filter($arrayP, $fun);

//print_r($positivo);

// Oitavo Exec
//
$cubo = array_map(function ($n) {
    // o '**' siginifica potencia
    return $n ** 3;
}, $arrayN);

//print_r($cubo);

// Nono Exec
//
$ordemMai = array_map(fn ($a) => mb_strtoupper($a), $arrayS);

//print_r($ordemMai);
?>