<?php

include 'db.php';

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
        $query = db()->prepare("SELECT * FROM users WHERE email = :email");
        $user = $query->execute([
            'email' => $_POST['email']
        ]);

        // Este 'if' esta verificando a saida do array e se houver saida adiciona na variavel '$user'
        if ($users = $query->fetch()) {
            if (password_verify($_POST['pswd'], $user['pswd'])) {
                $_SESSION['id'] = $user['id'];
                $_SESSION['name'] = $user['name'];
                $_SESSION['email'] = $user['email'];
                $_SESSION['idAdm'] = $user['idAdm'];

                if ($user['idAdm'] == 1) {
                    header('Location: panelAdm.php');
                } else {
                    header('Location: panelUser.php');
                }
            } else {
                $_SESSION['errorPswd'] = 'Senha incorreta!';
                header('Location: login.php');
            }
        } else {
            $_SESSION['errorEmail'] = 'Email incorreto!';
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
        $hash = password_hash($_POST['pswd'], PASSWORD_DEFAULT);

        if ($_POST['email'] == 'pedro@pedro') {
            $idAdm = 1;
        } else {
            $idAdm = 0;
        }

        $query = db()->prepare("SELECT * FROM users WHERE email = :email");
        $query->execute([
            'email' => $_POST['email']
        ]);

        if (!$query->fetch()) {
            $query = db()->prepare("INSERT INTO users (name, email, pswd, idAdm) VALUES (:name, :email, :hash, :idAdm)");
            $user = $query->execute([
                'name' => $_POST['name'],
                'email' => $_POST['email'],
                'pswd' => $hash,
                'idAdm' => $idAdm
            ]);

            header('Location: login.php');
        } else {
            $_SESSION['errorEmail'] = 'Email ja cadastrado!';
            header('Location: register.php');
        }
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
        $query = db()->prepare("SELECT * FROM users WHERE email = :email");
        $query->execute([
            'email' => $_POST['email']
        ]);

        if (!$query->fetch()) {
            $hash = password_hash($_POST['pswd'], PASSWORD_DEFAULT);

            $query = db()->prepare("UPDATE users SET name = :name, email = :email, pswd = :pswd, idAdm = :idAdm WHERE id = :id");
            $user = $query->execute([
                'id' => $_POST['id'],
                'name' => $_POST['name'],
                'email' => $_POST['email'],
                'pswd' => $hash,
                'idAdm' => $_POST['idAdm']
            ]);

            header('Location: panelAdm.php');
        } else {
            $_SESSION['errorEmail'] = 'Email ja cadastrado!';
        }
    }
}

if (isset($_POST['del'])) {
    $query = db()->prepare("DELETE FROM users WHERE id = :id");
    $user = $query->execute([
        'id' => $_GET['id']
    ]);

    header('Location: panelAdm.php');
}

if (isset($_POST['logout'])) {
    session_destroy();
    header('Location: index.php');
}

if (isset($_POST['null'])) {
    header('Location: index.php');
}
