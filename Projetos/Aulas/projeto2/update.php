<?php

include 'functions.php';

if (isset($_POST['nome'])) {

    if (strlen($_POST['senha']) == 0) {

        $query = db()->prepare("UPDATE usuarios SET
    nome = :nome, email = :email WHERE id = :id");

        $query->execute([
            'nome' => $_POST['nome'],
            'email' => $_POST['email'],
            'id' => $_POST['id']

        ]);
        header('Location: ../index.php');
    } else {
        $query = db()->prepare("UPDATE usuarios SET
        nome = :nome, email = :email, senha = :senha WHERE id = :id");
    
            $query->execute([
                'nome' => $_POST['nome'],
                'email' => $_POST['email'],
                'senha' => password_hash($_POST['senha'], PASSWORD_DEFAULT),
                'id' => $_POST['id']
            ]);

        header('Location: ../index.php');
    }
} else {

    $query = db()->prepare("Select * FROM usuarios WHERE id = :id");

    $query->execute([
        'id' => $_GET['id']
    ]);

    $user = $query->fetch();



?>
    <form method="POST">
        <input type="text" name="id" hidden value="<?= $user['id'] ?>">
        <label for="">Nome</label>
        <input type="text" name="nome" value="<?= $user['nome'] ?>" required><br>
        <label for="">Email</label>
        <input type="email" name="email" value="<?= $user['email'] ?>" required><br>
        <label for="">Senha</label>
        <input type="password" name="senha"><br>
        <button type="submit">Enviar</button>
    </form>

<?php } ?>