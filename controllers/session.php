<?php

session_start();

$_SESSION['pseudo'] = $_POST['pseudo'];
$_SESSION['pass'] = $_POST['pass'];
include 'users.php';
$failure = 0;
$maxusers = count($users);

foreach ($users as $user){
    if ($_SESSION['pseudo'] === $user['name'] && $_SESSION['pass'] === $user['pass']){
        header('Location: ../index.php');
    } else{
        $failure+=1;
    }
}
if($failure === $maxusers){
    session_destroy();
    header('Location: ../connexion.php');
}

?>
