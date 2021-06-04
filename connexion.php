<?php

session_start();


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

    <?php
    include "header.php";
    ?>
    <main>
        <form action="./controllers/session.php" method="POST">
            <label for="fname"> Prénom </label>
            <input type="text" id="fname" name="pseudo" placeholder="Martin" required>
            <label for="pass">Mot de passe </label>
            <input type="password" id="pass" name="pass" required>
            <input type="submit" value="Envoyer" id="sub">
        </form>
    </main>
    

</body>
</html>