<?php

/*
$num1 = 1;
$num2 = 2;

echo $num1 + $num2 . "\n\n";

if ($num2 % 2 == 1) {
    echo "é impar";
} else {
    echo "é par";
}
*/

$op = 1;

while ($op != 0) {
    echo "Qual operação você deseja?

    1. Soma
    2. Subtração
    3. Multiplicação
    4. Divisão

    0. Sair

    Resposta: ";

    $op = readline();

    switch ($op) {
        case 0:
            echo "Obrigado por usar a calculadora dos bizzonhos!!";
            break;
        
        case 1:
            echo "\n\nQual o primeiro numero: ";
            $num1 = readline();
            echo "\n\nQual o segundo numero: ";
            $num2 = readline();
            echo "\n\n" . "A soma dos numeros é " . $num1 + $num2 . "\n\n";
            break;
        
        case 2:
            echo "\n\nQual o primeiro numero: ";
            $num1 = readline();
            echo "\n\nQual o segundo numero: ";
            $num2 = readline();
            echo "\n\n" . "A subtração dos numeros é " . $num1 - $num2 . "\n\n";    
            break;

        case 3:
            echo "\n\nQual o multipliquendo: ";
            $num1 = readline();
            echo "\n\nQual o multiplicador: ";
            $num2 = readline();
            echo "\n\n" . "A multiplicação dos numeros é " . $num1 * $num2 . "\n\n";   
            break; 

        case 4:
            echo "\n\nQual o dividendo: ";
            $num1 = readline();
            echo "\n\nQual o divisor: ";
            $num2 = readline();
            echo "\n\n" . "A soma dos numeros é " . $num1 / $num2 . "\n\n"; 
            break;
            
        default:
            echo "Numero invalido, Por favor escolha corretamente mula!!!";
    }
}

?>