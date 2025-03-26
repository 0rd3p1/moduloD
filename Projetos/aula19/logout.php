<?php

include 'head.php';
include 'protect.php';

if (!isset($_SESSION)) {
    session_start();
}
    
if (isset($_SESSION['id'])) { ?>
    <form action="actions.php" method="POST">
        <div class="flex place-items-center flex-col mb-80">
            <div class="flex flex-col place-items-center bg-stone-300 w-100 mt-85 rounded-xl shadow-xl">
                <p class="text-xl m-7 text-center">
                    Voce deseja mesmo sair da sua conta?
                </p>

                 <div class="flex place-items-center m-7">
                    <button class="bg-red-300 hover:bg-red-400 rounded-md w-30 mr-3" type="submit" name="logout">Sim</button>
                    <button class="bg-green-300 hover:bg-green-400 rounded-md w-30 ml-3" type="submit" name="null">Não</button>
                 </div>
            </div>
         </div>
     </form>
<?php } else {
    header('Location: index.php');
}
?>

<?php include 'footer.php' ?>