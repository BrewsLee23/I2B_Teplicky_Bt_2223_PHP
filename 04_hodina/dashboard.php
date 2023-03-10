<?php

    const USERNAME = 'fresh';
    const PASSWORD = 'ABCabc123';

    session_start();

    if (issset($_COOKIE['count'])) {
        setcookie('count', 0, time() + 3600 * 24 * 30 , '/'); // CTRL + click na setcookie
    }

    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        function login($username, $password){
            return $username == USERNAME && $password == PASSWORD;
        }

        if (login($username, $password)) {
            echo 'Zadali jste správné údaje';
            $_SESSION['user'] = $username;
            $_SESSION['count'] = 0;
        } else {
            header('Location: index.php');
            die();
        }
    }

    if (empty($_SESSION['user'])) {
        header('Location: index.php');
        die();
    }
    $_SESSION['count']++;
?>

<h1>Vítej, uživateli <?= $_SESSION['user'] ?></h1>
<p>Za tuto relaci jste tuto stránku navštívil celkem <?= $_SESSION['count'] ?></p>
<p>Od počátku věků jste tuto stránku navštívil celkem <?= $_COOKIE['count'] ?></p>
<a href="logout.php">Odhlásit se</a>