<?php

include 'User.php';

$c = 1;
$users = [];
$op = 0;
$u = new User(/*$i, $n, $s, $e*/);

while ($op != 6) {

    echo "\n\tBem vindo ao Bizzonhos solucoes\n";
    echo "\nEscolha uma opção abaixo";
    echo "\n1 - Cadastrar";
    echo "\n2 - Excluir Usuario";
    echo "\n3 - Alterar Cadastro";
    echo "\n4 - Buscar por Email";
    echo "\n5 - Mostrar Todos";
    echo "\n6 - Sair";
    echo "\nSua escolha: ";
    $op = readline();

    switch ($op) {

        case 1:
            echo "\nInforme seu nome: ";
            $n = readline();
            echo "\nInforme seu email: ";
            $e = readline();
            echo "\nInforme sua senha: ";
            $s = readline();

            if ($c == count($users)) {
                $c++;
            }

            $users =  $u -> add($n, $e, $s, $c, $users);
            
            break;

        case 2:
            echo "\nInforme o email do usuario que deseja excluir: ";
            $e = readline();
            
            $users = $u -> del($e, $users);
            $c--;
            break;

        case 3:
            echo "\nInforme o email do usuario que deseja alterar: ";
            $e = readline();

            $users = $u -> alt($n, $s, $e, $users);
            break;

        case 4:
            echo "\nInforme o email do usuario que deseja buscar: ";
            $e = readline();
            
            $users = $u -> getByEmail($e, $users);
            break;
        
        case 5:
            $u -> getAll($users);
            break;

        case 6:
            echo "\n\tAte mais!!!\n\n";
            exit;

        default:
            echo "\n\tEscolha uma das opcoes seu demente!!\n";
            break;
    }
}

?>