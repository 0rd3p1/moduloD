<?php

// Primeiro Exec 
//

$alunos = [
    'Aluno' => ["Pedro", "Wally", "Eduardo", "Julio", "Carlos", "Lukas", "Lorenzo", "Joao", "Rodrigo", "Caio"],
    'Nota' => [10, 6, 9, 0, 8, 9, 8, 8, 8, 9]
];

$c = 0;
$not = 0;

for ($i = 0; $i < 10; $i++) {
    $not += $alunos['Nota'][$i];
    $c++;
}

$ma;



for ($i = 0; $i < 10; $i++) {
    for ($j = 0; $j < 10; $j++) {
        if ($alunos['Nota'][$i] < $alunos['Nota'][$j]) {
            $ma = $j;
        }
    }
}

$med = $not / $c;

//echo "A média das notas é $med\n" . "A melhor nota foi do aluno " . $alunos['Aluno'][$ma] . " com a nota " . $alunos['Nota'][$ma];

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

/*
echo "Digite um numero: ";

$num = readline();

for ($i = 0; $i < 10; $i++) {
    echo "\nMultiplicado pelo numero " . $nums[$i] . " resulta em " . $nums[$i] * $num . "\n";
}
*/

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

// Quinto Exc
//

$mes = ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agorsto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'];

/*
echo "Escolha um mes pelo seu numero correspondente: ";

$o = readline();
$o -= 1;

if ($o <= 11 && $o >= 0) {
    echo "\nO mes escolhido foi " . $mes[$o];
}
*/

// Sexto Exec
//

$nu = [1, 3, 2, 4, 5, 8, 7, 10, 9];

for ($i = 0; $i < count($nu) - 1; $i++) {
    for ($j = 0; $j < count($nu) - 1; $j++) {
        if ($nu[$j] < $nu[$j + 1]) {
            $temp = $nu[$j];
            $nu[$j] = $nu[$j + 1];
            $nu[$j + 1] = $temp;
        }
    }
}

//var_dump($nu);

// Setimo Exec
//


?>