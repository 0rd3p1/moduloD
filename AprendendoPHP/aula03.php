<?php

// Primeira Exec

$num = [];


for ($i = 0; $i < 15; $i++) {
    $num[$i] = $i + 1;
}


for ($i = 9; $i >= 0; $i--) {
    //echo $num[$i] . "\n";
}

// Segundo Exec

$soma = 0;

for ($i = 0; $i < 15; $i++) {
    if ($i % 2 == 0) {
        $soma += $num[$i];
    }
}

//echo $soma;

// Terceiro Exec

$nums = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];


for ($i = 0; $i < 10; $i++) {
    $som[] = $num[$i];
    $som[] = $nums[$i];
}

//var_dump($som);

// Quarto Exec

$n = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 20 , 31, 40, 50, 60, 71, 80, 90, 100];
$cont = 0;

for ($i = 0; $i < 20; $i++) {
    if ($n[$i] % 2 == 1) {
        $cont++;
        $imp[] = $n[$i];
    }
}

//var_dump($imp);
//echo "Existem $cont numeros impares";

// Quinto Exec

$mul = [];

for ($i = 0; $i < 10; $i++) {
    $mul[] = $num[$i] * $nums[$i];
}

//var_dump($mul);

?>