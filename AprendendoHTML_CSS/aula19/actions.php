<?php

include 'db.php';
include 'protect.php';

if (!isset($_SESSION)) {
    session_start();
}

if (isset($_POST['login'])) {
    if (strlen($_POST['email']) == null) {
        $_SESSION['errorEmail'] = 'Digite o email';
        header('Location: login.php');
        exit();
    } elseif (strlen($_POST['pswd']) == null) {
        $_SESSION['errorPswd'] = 'Digite a senha';
        header('Location: login.php');
        exit();
    } else {
        $query = db()->prepare("SELECT * FROM users WHERE email = :email AND pswd = :pswd");
        $query->execute([
            'email' => $_POST['email'],
            'pswd' => $_POST['pswd']
        ]);

        // Este 'if' esta verificando a saida do array e se houver saida adiciona na variavel '$user'
        if ($user = $query->fetch()) {
            $_SESSION['id'] = $user['id'];
            $_SESSION['name'] = $user['name'];
            $_SESSION['email'] = $user['email'];
            header('Location: panel.php');
        } else {
            $_SESSION['error'] = 'Email ou senha invalidos!';
            header('Location: login.php');
        }
    }
}

if (isset($_POST['register'])) {
    if (strlen($_POST['name']) == null) {
        $_SESSION['errorName'] = 'Digite um nome';
        header('Location: register.php');
        exit();
    } elseif (strlen($_POST['email']) == null) {
        $_SESSION['errorEmail'] = 'Digite um email';
        header('Location: register.php');
        exit();
    } elseif (strlen($_POST['pswd']) == null) {
        $_SESSION['errorPswd'] = 'Digite uma senha';
        header('Location: register.php');
        exit();
    } else {
        $name = ($_POST['name']);
        $email = ($_POST['email']);
        $pswd = ($_POST['pswd']);

        $query = db()->prepare("INSERT INTO users (name, email, pswd) VALUES (:name, :email, :pswd)");
        $user = $query->execute([
            'name' => $name,
            'email' => $email,
            'pswd' => $pswd
        ]);

        header('Location: login.php');
    }
}

if (isset($_POST['update'])) {
    if (strlen($_POST['name']) == null) {
        $_SESSION['errorName'] = 'Digite um nome';
        header('Location: panel.php');
        exit();
    } elseif (strlen($_POST['email']) == null) {
        $_SESSION['errorEmail'] = 'Digite um email';
        header('Location: panel.php');
        exit();
    } elseif (strlen($_POST['pswd']) == null) {
        $_SESSION['errorPswd'] = 'Digite uma senha';
        header('Location: panel.php');
        exit();
    } else {
        $id = ($_POST['id']);
        $name = ($_POST['name']);
        $email = ($_POST['email']);
        $pswd = ($_POST['pswd']);

        $query = db()->prepare("UPDATE users SET name = :name, email = :email, pswd = :pswd WHERE id = :id");
        $user = $query->execute([
            'id' => $id,
            'name' => $name,
            'email' => $email,
            'pswd' => $pswd
        ]);

        header('Location: panel.php');
    }
}

if (isset($_POST['del'])) {
    $query = db()->prepare("DELETE FROM users WHERE id = :id");
    $user = $query->execute([
        'id' => $_GET['id']
    ]);

    header('Location: panel.php');
}

if (isset($_POST['logout'])) {
    echo "oi";
    session_destroy();
    header('Location: index.php');
}

if (isset($_POST['null'])) {
    header('Location: panel.php');
}