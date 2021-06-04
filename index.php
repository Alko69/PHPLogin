<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">  
    
    <title>Document</title>
</head>
<body>
    <?php
        include "header.php";
         if(isset($_SESSION['pseudo'])){
             echo 'Bienvenue';
         }
    ?>

</body>
</html>