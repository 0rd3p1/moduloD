<?php

// Primeira Exec

$num = [];


for ($i = 0; $i < 15; $i++) {
    $num[$i] = $i + 1;
}

/*
for ($i = 9; $i >= 0; $i--) {
    echo $num[$i] . "\n";
}
*/
// Segundo Exec

$soma = 0;

for ($i = 0; $i < 15; $i++) {
    if ($i % 2 == 0) {
        $soma += $num[$i];
    }
}

echo $soma;
var_dump($num);

?>