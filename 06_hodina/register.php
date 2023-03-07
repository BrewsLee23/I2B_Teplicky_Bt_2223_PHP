<?php
session_start();
if (!empty($_SESSION['user'])) {
    header('Location: dashboard.php');
    die();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registrace</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="./styles.css">
</head>
<body>
<div id="frm">
    <form method="post" action="signup.php">

        <label for="username">username</label><br/>
        <input type="text" name="username" id="username"><br/><br/>
        <label for="password">password</label><br/>
        <input type="password" name="password" id="password"><br/><br/>
        <label for="passwordRepeat">password</label><br/>
        <input type="password" name="passwordRepeat"><br/><br/>
        <button type="submit">sign in</button>
    </form>
</div>
</body>
</html>