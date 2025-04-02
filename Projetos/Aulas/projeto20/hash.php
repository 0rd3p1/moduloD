<?php 

$senha = '123456';

echo $senha . '<br>';
$hash = password_hash($senha, PASSWORD_DEFAULT);
echo $hash . '<br>';


if(password_verify('1234567', $hash)){
    echo 'Senha correta';
}else{
    echo 'Senha incorreta';
}

