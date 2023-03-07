<?php
    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    error_reporting(E_ALL);

    require_once 'config.php';

    session_start();

    $db = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_USERNAME, DB_USERNAME, DB_PASSWORD);

    if (issset($_COOKIE['count'])) {
        setcookie('count', 0, time() + 3600 * 24 * 30 , '/'); // CTRL + click na setcookie
    }

    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        function login (string $username, string $password, $db): bool {
            // return $username == USERNAME && $password == PASSWORD;
            $query = $db->query('SELECT * FROM users');
            $users = $query->fetchAll();

            for ($i = 0; $i < count($users); $i++) {
                $user = $users[$i];
                if($username == $user['username'] && $password == $user['password']) {
                    return true;
                }
            }
            return false;
        }

        if (login($username, $password, $db)) {
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