<html>

<head>
    <title>Авторизация</title>
    <link rel="stylesheet" href="styles/index.css">
</head>

<body>
    <h1>Авторизация</h1>
    <form action="login.php" method="POST">
        <input type="text" name="username" id="username" placeholder="Ник" required>
        <input type="password" name="password" id="password" placeholder="Пароль" required>
        <input type="submit" value="Войти" name="login" id="login">
        <a href="/signup.php">Регистрация</a>
    </form>
</body>

</html>