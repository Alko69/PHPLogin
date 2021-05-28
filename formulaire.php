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
        <form action="admission.php" method="POST">
            
            <div id="form">
                <label for="fname"> Prénom</label>
                <input type="text" id="fname" name="fname" placeholder="Martin">
            </div>
            <div id="form">
                <label for="lname"> Nom</label>
                <input type="text" id="lname" name="lname" placeholder="Ex: Matin">
            </div>
            <div id="form">
                <label for="age"> Date de naissance</label>
                <input type="date" id="age" name="age">
            </div>
            <div>
                <label for="password">Mot de passe</label>
                <input type="password" id="password" name="password">
            </div>

            <input type="submit" value="Envoyer" id="sub">
            
        </form>
    </main>
    
</body>
</html>