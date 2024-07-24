<?php

session_start();

if(!isset($_SESSION['username'])) {
    header('Location: ../index.php');
    exit();
}

echo '<h1>Страница секретная</h1>';

?>