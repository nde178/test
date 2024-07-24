<?php
    session_start();
    //Проверяем что пришло с формы
    if(isset($_POST['username']) || isset($_POST['password'])) {
        $username = $_POST['username_or_telephone'];
        $password = $_POST['password'];
    }

    //Шифруем пароль
    $password = md5($password);
    //подключаемся к базе
    $mysqli=new mysqli('localhost', 'root', '', 'php_basa');

    //запрос
    $sql="SELECT * FROM Users WHERE name = '$username'";
    if ($mysqli->query($sql)->fetch_assoc()) {
        $sql="SELECT * FROM Users WHERE name = '$username' AND password = '$password'";
        if ($mysqli->query($sql)->fetch_assoc()) {
            echo "Вход прошел успешно";
            $_SESSION['username'] = $username;
            header('Location: ../templates/page1.php');
            exit();
        } else {
            echo "Неверный пароль";
            exit();
    }
    } else {
        $sql="SELECT * FROM Users WHERE telephone = '$username' AND password = '$password'";
        if ($mysqli->query($sql)->fetch_assoc()) {
            echo "Вход прошел успешно";
            $_SESSION['username'] = $username;
            header('Location: ../templates/page1.php');
            exit();
        } else {
            echo "Неверный пароль";
            exit();
    }
    }
?>