<header>
    <nav>
        <ul>
            <li><a href="index.php">Accueil</a></li>
            <li><a href="formulaire.php">Inscription</a></li>
            <li><a href="tableaux.php"> Tableau</a></li>
            <?php if(empty($_SESSION['pseudo'])):?> <li><a href="connexion.php">Connexion</a></li><?php endif ?>
            <?php if(isset($_SESSION['pseudo'])):?> <li>Bonjour <?= $_SESSION['pseudo'] ?></li><?php endif ?>
            <?php if(isset($_SESSION['pseudo'])):?> <li><a href="deco.php">Déco</a></li><?php endif ?>
        </ul>
    </nav>  
</header>   

