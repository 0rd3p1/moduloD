<?php

// Primeiro Exec
//
function parImpar ($n) {
    // Funciona igual 'if else' sendo o '?' o if e ':' else
    return ($n % 2) == 0 ? 'Par' : 'Impar';
}

$pI = parImpar(10);

//echo $pI;

// Segundo Exec
//
function fat ($n) {
    return array_product(range($n, 1));
}

$fato = fat(7);

//echo $fato;;

// Terceiro Exec          AINDA NAO FINALIZADO
//
$pal = '131';

function pali ($s) {
    $reversed = strrev ($s);
    // os 3 iguais '===' são para comparar as strings e verificar se são o mesmo tipo também
    return  $s === $reversed ? 'É um palíndromo' : 'Não é um palíndromo';
}

//echo pali($pal);

// Quarto Exec
//
function ran () {
    return random_int(1, 10);
}

$rand = ran();

//echo $valor;

// Quinto Exec
//
$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

function med ($a) {
    $cont = 0;
    $som = 0;
    for ($i = 0; $i < count($a); $i++) {
        $som += $a[$i];
        $cont++;
    }
    return $som / $cont;
}

$med = med($array);

//echo $med;


// Curiosidade sobre tipagem no function
//
// O 'int' foi usado para tipar as variaveis e o ': int' para tipar o resultado do return
function soma (int $n1, int $n2): int {
    return $n1 + $n2;
}

?>