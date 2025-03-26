<?php

if(!isset($_SESSION)){
    session_start();
}

if(isset($_POST['logar'])){

    $db = new PDO('sqlite:banco.sqlite');
    $query = $db->prepare("SELECT * FROM usuarios
    WHERE email = :email");

    $query->execute([
        'email' => $_POST['email']
    ]);

    $user = $query->fetch();

    if(password_verify($_POST['senha'], $user['senha'])){

        $_SESSION['id'] = $user['id'];
        $_SESSION['nome'] = $user['nome'];
        $_SESSION['email'] = $user['email'];
        header('Location: painel.php');

    }else{
        $_SESSION['mensagem'] = 'Email ou senha invalidos!';
        header('Location: login.php');
    }
}