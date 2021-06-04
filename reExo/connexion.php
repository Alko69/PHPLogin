<?php

session_start();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="./connexion.js" defer></script>
    <title>Document</title>
</head>

<body>
    <?php
    include "./templates/header.php";
    ?>
    <main id="connexion">
        <form action="./controllers/session.php" method="POST" id="formulaire">
            <div class="mb-3">
                <label for="fname" class="form-label"> Username</label>
                <input type="text" class="form-control" id="fname" name="pseudo">
            </div>
            <div class="mb-3">
                <label for="pass" class="form-label">Password</label>
                <div id="divPass">
                    <input type="password" class="form-control" id="pass" name="pass">
                    <a class="btn btn-primary" id="test" href="#" role="button"><img class="image" src="https://image.flaticon.com/icons/png/512/25/25186.png" alt=""> 
                    <img class="imageClosed none" src="https://img.icons8.com/material-rounded/452/closed-eye.png" alt=""></a>
                </div>
            </div>
            <button type="submit" class="btn btn-primary" id="sub">Submit</button>
            <?php if (isset($_SESSION['wrongPass']) && $_SESSION['wrongPass'] === true) : ?>
                <p class="wrongPass">Invalid username or password</p>
                <?php $_SESSION['wrongPass'] = false; ?>
            <?php endif ?>
        </form>
        <div id="inscription">
            <p id="sign">Si vous ne possédez pas de compte, inscrivez-vous !</p>
            <button class="btn btn-primary" type="submit" id="signUp">Inscription</button>
        </div>

    </main>
    <main id="admission" class="none">
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>