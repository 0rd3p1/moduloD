<?php
$db = new PDO('sqlite:banco.sqlite');

if (isset($_POST['pesquisar'])) {
    $query = $db->prepare("SELECT * FROM usuarios WHERE nome like :pesquisar OR email like :pesquisar");
    $query->execute([
        'pesquisar' => '%' . $_POST['pesquisar'] . '%'
    ]);
    $usuarios = $query->fetchAll();
} else {
    $query = $db->prepare("SELECT * FROM usuarios");
    $query->execute();
    $usuarios = $query->fetchAll();
}
?>

<form method="POST">
    <input type="text" name="pesquisar" placeholder="pesquisar...">
    <button type="submit">Pesquisar</button>
</form>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($usuarios as $p): ?>
            <tr>
                <td><?= $p['id'] ?></td>
                <td><?= $p['nome'] ?></td>
                <td><?= $p['email'] ?></td>
                <td>
                    <button><a href='update.php/?id=<?= $p['id'] ?>'>Editar</a></button>
                    <form action="acoes.php" method="POST">
                        <button onclick="return confirm('Você deseja excluir mesmo?')"
                            type="submit" name="deleta_usuario" value="<?= $p['id'] ?>">
                            Excluir
                        </button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>