<?php

// Primeiro Exec 
//
 


//                           FALTA MOSTRAR O ESTUDANTE COM A MELHOR NOTA



$alunos = [
    'Aluno' => ["Pedro", "Wally", "Eduardo", "Julio", "Carlos", "Lukas", "Lorenzo", "Joao", "Rodrigo", "Caio"],
    'Nota' => [10, 10, 10, 0, 10, 10, 10, 10, 10, 10]
];
/*
$alunos = [
    'Pedro' => [10],
    'Joao' => [10],
    'Julio' => [0],
    'Caio' => [10],
    'Rodrigo' => [10],
    'Lorenzo' => [10],
    'Eduardo' => [10],
    'Carlos' => [10],
    'Wallys' => [10],
    'Lukas' => [10]
];
*/
$c = 1;
$not = 0;

foreach ($alunos['Nota'] as $a) {
    $not += $a;
    $c++;
}

$ma;

for ($i = 0; $i < count($alunos) - 1; $i++) {
    for ($j = 0; $j < count($alunos) - 1; $j++) {
        if ($alunos[$j] > $alunos[$j + 1]) {
            $temp = $alunos[$j];
            $alunos[$j] = $alunos[$j + 1];
            $alunos[$j + 1] = $temp;
        }
    }
}

var_dump($alunos);
exit;

$med = $not / $c;

//echo "A média das notas é $med";

// Segundo Exec
//
$nums = [-1, -2, 3, 4, 5, 6, 7, -8, 9, 10];
$neg = 0;
$pos = 0;
$imp = 0;
$par = 0;

for ($i = 0; $i < 10; $i++) {
    if ($nums[$i] < 0) {
        $neg++;
    } else {
        $pos++;
    }

    if ($nums[$i] % 2 == 0) {
        $par++;
    } else {
        $imp++;
    }
}

//echo "Haviam $neg numeros negativos, $pos numeros positivos, $imp numeros impares e $par numeros pares."

// Terceiro Exec
//
//echo "Digite um numero: ";

//$num = readline();

for ($i = 0; $i < 10; $i++) {
    //echo "\nMultiplicado pelo numero " . $nums[$i] . " resulta em " . $nums[$i] * $num . "\n";
}

// Quarto Exec
//
$vet1 = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
$vet2 = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0];

$cont1 = 1;
/*
for ($i = 0; $i < 10; $i++) {
    echo "Digite o " . $cont1 . "° numero para o primeiro vetor: ";
    $vet1[$i] = readline();
    $cont1++;
}

$cont2 = 1;

for ($i = 0; $i < 10; $i++) {
    echo "Digite o " . $cont2 . "° numero para o segundo vetor: ";
    $vet2[$i] = readline();
    $cont2++;
}

$cont3 = 1;

for ($i = 0; $i < 10; $i++) {
    echo "\nA multiplicacao dos " . $cont3 . "°s numeros de cada vetor é " . $vet1[$i] * $vet2[$i] . "\n";
    $cont3++;
}
*/

?>