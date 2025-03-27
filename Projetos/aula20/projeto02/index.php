<?php 

$db = new PDO('sqlite:banco.sqlite');

$query = $db->prepare("SELECT * FROM usuarios");
$query->execute();
$usuarios = $query->fetchAll();

?>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>senha</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($usuarios as $p): ?>
        <tr>
            <td><?= $p['id'] ?></td>
            <td><?= $p['nome'] ?></td>
            <td><?= $p['email'] ?></td>
            <td><?= $p['senha'] ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>