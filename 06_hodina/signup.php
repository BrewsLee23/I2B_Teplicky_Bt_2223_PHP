<?php

require_once 'password.php';

$username = $_POST['username'];
$password = $_POST['password'];
$passwordRepeat = $_POST['passwordRepeat'];

if (!empty($username) && !empty($password) && !empty($passwordRepeat)) {
    //Pole jsou vyplněná
    if ($password == $passwordRepeat) {
        if (isValid($password)) {

        } else {
            echo 'Heslo není validní!';
        }
    } else {
        echo 'Hesla se neshodují';
    }
}
?>