<html>
<?php
include_once("db.php");
if(isset($_COOKIE['username'])) {
    echo 'Вы уже вошли';
}
if(isset($_POST['username']) && isset($_POST['password'])) {
        
        $username = $_POST['username'];
        $password = $_POST['password'];
        $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        echo $query;
        $stmt = $conn->query($query);
        if($stmt->num_rows == 0) {
            echo '<h1>Неверный логин или пароль. Ошибка.</h1>';
        } else {
            echo '<h1>Вы успешно вошли как ' . $username;
            setcookie("username", $username);
        }
        $conn->close();
}
?>

</html>