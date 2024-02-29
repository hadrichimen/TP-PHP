<?php
include("User.php");
if (isset($_POST['login']) && isset($_POST['password'])) {
    $login = $_POST['login'];
    $password = $_POST['password'];

    $user = new User($login, $password); //5ater bech ne5thou  men model connecte)

    if ($user->connect()) {
        echo ($user);
    } else {
        echo ('Echec de connexion');
    }
}
