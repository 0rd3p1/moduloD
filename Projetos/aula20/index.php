<?php

include 'head.php';
include 'db.php';

if (!isset($_SESSION)) {
    session_start();
}

$query = db()->prepare('SELECT * FROM books');
$query->execute();

$books = $query->fetchAll();

?>

<header class="p-5 shadow-lg flex place-content-between bg-stone-700">
    <h1 class="text-bold text-5xl text-stone-400 font-extrabold">Livros</h1>

    <nav class="flex place-items-center text-2xl font-extrabold flex-wrap">
        <?php if (isset($_SESSION['idAdm'])) { ?>
        <a href="panelAdm.php" class="rounded-md mr-20 p-2 text-stone-400">ADM</a>
        <?php } ?>

        <?php if (!isset($_SESSION['id'])) { ?>
        <a href="login.php" class="rounded-md mr-20 p-2 text-stone-400">Login</a>
        <?php } else { ?>
        <a href="panelUser.php" class="rounded-md mr-20 p-2 text-stone-400">Painel</a>
        <?php } ?>

        <a href="index.html" class="rounded-md p-2 text-stone-400">Home</a>
    </nav>
</header>

<section class="flex flex-col place-items-center">
    <?php foreach ($books as $book) { ?>
        <article class="flex flex-col bg-stone-700 p-5 w-7xl m-20 rounded-xl place-items-center p-10 shadow-lg">
            <h1 class="text-5xl pb-10 text-stone-400"><?= $book['title']; ?></h1>
            <p class="pb-15 text-2xl text-center text-stone-400"><?= $book['description']; ?></p>
            <img src="<?= $book['image']; ?>">
            <p class="pt-15 text-2xl text-center text-stone-400">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus praesentium consectetur
                quasi aspernatur incidunt est? Sapiente perspiciatis quam distinctio aut debitis. Magnam reiciendis
                sint, qui dicta aperiam labore at harum.
            </p>
        </article>
    <?php } ?>
</section>

<?php include 'footer.php' ?>