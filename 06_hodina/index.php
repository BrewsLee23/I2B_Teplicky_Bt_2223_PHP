<?php
    session_start();

    if (!empty($_SESSION['user'])) {
        header('Location: dashboard.php');
        die();
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
<form method="post" action="dashboard.php" class="flex flex-col p-5 w-50 bg-white">

    <label for="username">Username</label>
    <input type="text" name="username" id="username">
    <label for="password">Heslo</label>
    <input type="password" name="password" id="password">

    <button type="submit">Sign up</button>
</form>
</body>
</html>
