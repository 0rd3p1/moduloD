<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>

<body>
    <form action="script.php" method="POST">
        <label for="email">Email</label>
        <input type="email" name="email">
        <label for="pswd">Senha</label>
        <input type="password" name="pswd">
        <button class="border-2 border-solid" type="submit" name="logar">Entrar</button>
    </form>
</body>

</html>