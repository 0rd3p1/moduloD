<?php


if (!isset($_SESSION)) {
    session_start();
}

if ($_POST) {
    $db = new PDO('sqlite:banco.sqlite');
    $query = $db->prepare('SELECT * FROM usuarios 
        WHERE email = :email AND senha = :senha');
    $query->execute([
        'email' => $_POST['email'],
        'senha' => $_POST['senha']
    ]);
    if ($pessoa = $query->fetch()) {
        echo '<h1> Seja bem vindo ' . $pessoa['nome'] . '</h1>';
    } else {
        $_SESSION['mensagem'] = 'Usuario não encontrado';
        header('Location: login.php');
    }
} else {
    if (isset($_SESSION['mensagem'])) {
        echo $_SESSION['mensagem'];
        unset($_SESSION['mensagem']);
    }
?>
    <form action="" method="POST">
        <label for="">Email</label>
        <input type="email" name="email"><br>
        <label for="">Senha</label>
        <input type="password" name="senha"><br>
        <button type="submit">Enviar</button>
    </form>

<?php } ?>