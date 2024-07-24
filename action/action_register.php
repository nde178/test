
<?php
    //Проверяем что пришло с формы
    if(isset($_POST['username']) || isset($_POST['password']) || isset($_POST['password2'])|| isset($_POST['email']) || isset($_POST['telephone'])) {
        if($_POST['password'] != $_POST['password2']) {
            echo "Пароли не совпадают";
            exit();
        }

        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $telephone = $_POST['telephone'];
    }

    //Шифруем пароль
    $password = md5($password);
    //Подключаемся к базе
    $mysqli=new mysqli('localhost', 'root', '', 'php_basa');
    //Проверяем существует ли пользователь
    $sql="SELECT * FROM Users WHERE name = '$username'";
    if ($mysqli->query($sql)->fetch_assoc()) {
        echo "Пользователь с таким именем уже существует";
        exit();
    }
    //Проверяем существует ли почта
    $sql="SELECT * FROM Users WHERE email = '$email'";
    if ($mysqli->query($sql)->fetch_assoc()) {
        echo "Пользователь с таким email уже существует";
        exit();
    }
    //Проверяем существует ли телефон
    $sql="SELECT * FROM Users WHERE telephone = '$telephone'";
    if ($mysqli->query($sql)->fetch_assoc()) {
        echo "Пользователь с таким телефоном уже существует";
        exit();
    }
    //Добавляем пользователя
    $sql = "INSERT INTO Users (name, password, email, telephone) VALUES ('$username', '$password', '$email', '$telephone')";
    //Запускаем запрос
    $mysqli->query($sql);
    //Закрываем соединение
    $mysqli->close();
    
    echo "Регистрация прошла успешно";

?>