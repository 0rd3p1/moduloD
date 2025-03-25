<?php

include 'head.php';
include 'protect.php';

if (!isset($_SESSION)) {
    session_start();
}

?>

<form action="../actions.php" method="POST">

    <input type="text" hidden name="id" value="<?= $_GET['id']; ?>">

    <div class="flex place-items-center flex-col mb-80">
        <div class="flex flex-col place-items-center bg-stone-300 w-100 mt-60 rounded-xl shadow-xl">
            <div class="flex flex-col m-7">
                <label for="nome">Nome</label>
                <input type="text" name="name" class="rounded-md w-60 bg-white">
            </div>

            <?php
            if (isset($_SESSION['errorName'])) {
                echo '<h1 class="font-bold text-red-400">' . $_SESSION['errorName'] . '</h1>';
                unset($_SESSION['errorName']);
            }
            ?>

            <div class="flex flex-col m-7">
                <label for="email">Email</label>
                <input type="email" name="email" class="rounded-md w-60 bg-white">
            </div>

            <?php
            if (isset($_SESSION['errorEmail'])) {
                echo '<h1 class="font-bold text-red-400">' . $_SESSION['errorEmail'] . '</h1>';
                unset($_SESSION['errorEmail']);
            }
            ?>

            <div class="flex flex-col m-7">
                <label for="pswd">Senha</label>
                <input type="password" name="pswd" class="rounded-md w-60 bg-white">
            </div>

            <?php
            if (isset($_SESSION['errorPswd'])) {
                echo '<h1 class="font-bold text-red-400">' . $_SESSION['errorPswd'] . '</h1>';
                unset($_SESSION['errorPswd']);
            }
            ?>

            <div class="flex place-items-center m-7">
                <button class="bg-slate-500 hover:bg-slate-600 rounded-md w-40" type="submit" name="update">Editar</button>
            </div>
        </div>

        <a href="login.php" class="text-extrabold mt-10"><- Voltar</a>
    </div>
</form>

<?php include 'footer.php' ?>