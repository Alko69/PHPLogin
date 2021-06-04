<?php

session_start();

include 'users.php';
foreach ($users as $user){
    if ($_POST['pseudo'] === $user['name'] && $_POST['pass'] === $user['pass']){
        $_SESSION['name'] = $user['name'];
    }
}
if(isset($_SESSION['name'])){
    header('Location: ../index.php');
}else{
    $_SESSION['wrongPass']= true;
    header('Location: ../connexion.php');
}


