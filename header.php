<header>
    <nav>
        <ul>
            <li><a href="index.php">Accueil</a></li>
            <li><a href="formulaire.php">Inscription</a></li>
            <li><a href="tableaux.php"> Tableau</a></li>
            <?php if(empty($_SESSION['pseudo'])):?> <li class="connex"><a href="connexion.php">Connexion</a></li><?php endif ?>
            <?php if(isset($_SESSION['pseudo'])):?> <li id="deco"><a href=""> Bonjour <?= $_SESSION['pseudo'] ?></a><?php endif ?>
        </ul>
        
    </nav>  
</header>   

