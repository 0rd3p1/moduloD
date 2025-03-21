<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>

<body class="bg-stone-300">
    <form action="actions.php" method="POST">
        <div class="justify-items-center mb-90">
            <div class="flex flex-col place-items-center bg-stone-400 w-100 mt-70 rounded-xl shadow-xl">
                <div class="flex flex-col m-7">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="rounded-md w-60 bg-white">
                </div>

                <div class="flex flex-col m-7">
                    <label for="pswd">Senha</label>
                    <input type="password" name="pswd" class="rounded-md w-60 bg-white">
                </div>

                <button class="bg-sky-600 hover:bg-sky-700 rounded-md mt-7 w-40" type="submit" name="login">Entrar</button>

                <a href="register.php" class="text-center bg-slate-500 hover:bg-slate-600 rounded-md m-7 w-40">Cadastrar</a>
            </div>
        </div>
    </form>

    <?php include 'footer.php' ?>