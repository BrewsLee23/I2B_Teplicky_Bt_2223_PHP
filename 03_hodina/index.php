<?php

    //require  'password.php';
    //include 'password.php';

    //include_once  'password.php';
    require_once  'password.php';
$err = [];
if (isset($_POST)) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $passwordCheck = $_POST['passwordCheck'];

    //['username' => $username, 'password' => $password, 'passwordCheck' => $passwordCheck] = $_POST;

    if (!empty($username) && !empty($password) && !empty($passwordCheck)) {
        if ($password != $passwordCheck) {
            $err[] = 'Hesla se neshodují!';
        } else {
            if (!isValid($password)) {
                $err[] = 'Heslo není ve validním formátu!';
            }
        }
    }
}
?>

<!DOCTYPE html>

<html lang="cs">
<head>
    <meta charset="UTF-8">
    <title>Třetí hodina</title>
    <style>
        .flex {
            display: flex;
        }

        .flex-col {
            flex-direction: column;
        }

        .p-5 {
            padding: 5rem;
        }

        .justify-center {
            justify-content: center;
        }

        .align-center {
            align-items: center;
        }

        .w-50 {
            width: 50%;
        }

        .bg-grey {
            background: #cecece;s
        }

        .bg-white {
            background: white;
        }
    </style>
</head>
<body class="bg-grey flex justify-center align-center">
    <form method="post" class="flex flex-col p-5 w-50 bg-white">
        <?php
            for ($i = 0; $i < sizeof($err); $i++) { ?>
                <p>Chyba: <?= $err[$i] ?></p>
            <?php }
        ?>
        <label for="username">Username</label>
        <input type="text" name="username" id="username">
        <label for="password">Heslo</label>
        <input type="password" name="password" id="password">
        <label for="passwordCheck">Heslo znovu</label>
        <input type="password" name="passwordCheck" id="passwordCheck">

        <button type="submit">Sign up</button>
    </form>
</body>
</html>
