<?php

    const USERNAME = 'fresh';
    const PASSWORD = 'ABCabc123';

    session_start();

    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        function login($username, $password){
            return $username == USERNAME && $password == PASSWORD;
        }

        if (login($username, $password)) {
            echo 'Zadali jste správné údaje';
            $_SESSION['user'] = $username;
        } else {
            header('Location: index.php');
            die();
        }
    }

    if (empty($_SESSION['user'])) {
        header('Location: index.php');
        die();
    }
?>

<h1>Vítej, uživateli <?= $_SESSION['user'] ?></h1>
