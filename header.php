<header>
    <nav>
        <ul>
            <li><a href="index.php">Accueil</a></li>
            <li><a href="formulaire.php">Inscription</a></li>
            <li><a href="tableaux.php"> Tableau</a></li>
            <?php if(empty($_SESSION['pseudo'])):?> <li class="connex"><a href="connexion.php">Connexion</a><?php endif ?>
            <?php if(isset($_SESSION['pseudo'])):?> <li><a href=""> Bonjour <?= $_SESSION['pseudo'] ?></a><div class="deco"><a href="deco.php">Déco</a></div></li></li><?php endif ?>
        </ul>
        
    </nav>  
</header>   

