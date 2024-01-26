<?php
include_once("db.php");
if(isset($_POST['username']) && isset($_POST['name']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $name = $_POST['name'];
    $password = $_POST['password'];

    $query = "INSERT INTO users (username, name, password) VALUES ('" . $username . "', '" . $name . "', '" . $password . "');";
    if($conn->query($query)) {
        echo '<h1>Успешная регистрация</h1>';
    } else {
        echo '<h1>Ошибка.</h1>';
    }
    $conn->close();

}
?>

<html>

<head>
    <link rel="stylesheet" href="styles/signup.css">
    <title>Регистрация</title>
</head>

<body>
    <h1>Регистрация</h1>
    <form action="signup.php" method="POST">
        <input type="text" placeholder="Ник" name="username" required>
        <input type="text" placeholder="Имя" name="name" required>
        <input type="password" placeholder="Пароль" name="password" required>
        <input type="submit" class="signup" value="Зарегистрироваться">
    </form>
</body>

</html>