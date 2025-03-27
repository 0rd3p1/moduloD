<?php

include 'head.php';
include 'protect.php';
include 'db.php';

if (!isset($_SESSION)) {
    session_start();
}

?>

<header class="p-5 shadow-lg">
    <nav class="flex place-content-around place-items-center text-2xl font-extrabold flex-wrap overflow-cover">
        <a href="index.html" class="rounded-md p-1 text-yellow-500 hover:shadow-lg">Home</a>
        <a href="https://www.google.com/" class="rounded-md p-1 text-green-600 hover:shadow-lg">Search</a>
        <h1 class="text-bold text-5xl text-pink-600 fontGlob">Globolixo</h1>
        <a href="panel.php" class="rounded-md p-1 text-red-600 hover:shadow-lg">Painel</a>
        <a href="login.php" class="rounded-md p-1 text-blue-600 hover:shadow-lg">Login</a>
    </nav>
</header>

<?php

$query = db()->prepare('SELECT * FROM users');
$query->execute();

$users = $query->fetchAll();

?>

<div class="flex place-items-center flex-col">
    <table class="bg-stone-300 rounded-xl m-70">
        <thead>
            <tr>
                <th class="pr-5 pl-5 pt-2 pb-2">ID</th>
                <th class="pr-5 pl-5 pt-2 pb-2">Nome</th>
                <th class="pr-5 pl-5 pt-2 pb-2 bg-stone-300">Email</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user) { ?>
                <tr>
                    <td class="pr-5 pl-5 pt-2 pb-2 border-md border-solid bg-stone-300"><?= $user['id']; ?></td>
                    <td class="pr-5 pl-5 pt-2 pb-2"><?= $user['name']; ?></td>
                    <td class="pr-5 pl-5 pt-2 pb-2"> <?= $user['email']; ?></td>
                    <td class="pr-5 pl-5 pt-2 pb-2 flex">
                        <a href="update.php/?id=<?= $user['id']; ?>" class="pr-2 text-yellow-600">Editar</a>
                        <a href="del.php/?id=<?= $user['id']; ?>&name=<?= $user['name']; ?>" class="pl-2 text-red-500">Excluir</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<?php include 'footer.php' ?>