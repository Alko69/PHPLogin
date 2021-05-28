<?php

session_start();

$_SESSION['pseudo'] = $_POST['pseudo'];

if (isset($_SESSION['pseudo'])){
    header('Location: /index.php');

}


?>
