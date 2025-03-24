<?php

$db = new PDO('sqlite:banco.sqlite');
$query = $db->prepare('SELECT * FROM usuarios');
$query->execute();

$pessoas = $query->fetchAll();



?>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($pessoas as $pessoa){ ?>
        <tr>
            <td><?= $pessoa['id']; ?></td>
            <td><?= $pessoa['nome']; ?></td>
            <td> <?= $pessoa['email']; ?></td>
        </tr>
        <?php } ?>
    </tbody>
</table>