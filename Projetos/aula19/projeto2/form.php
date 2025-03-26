<?php 

if($_POST){
    $db = new PDO('sqlite:banco.sqlite');
    $query = $db->prepare
    ("INSERT INTO usuarios (nome, email, senha)
    VALUES (:nome, :email, :senha)");

    $query->execute([
        'nome' => $_POST['nome'],
        'email' => $_POST['email'],
        'senha' => $_POST['senha']
    ]);
    
}


?>


<form action="" method="POST">
    <label for="">Nome</label>
    <input type="text" name="nome"><br>
    <label for="">Email</label>
    <input type="email" name="email"><br>
    <label for="">Senha</label>
    <input type="password" name="senha"><br>
    <button type="submit">Enviar</button>
</form> 