<header>
    <nav>
        <ul>
            <li><a href="index.php">Accueil</a></li>
            <li><a href="tableaux.php">Tableaux</a></li>
            <?php if(empty($_SESSION['name'])):?> 
                <li class="connex"><a href="connexion.php">Connexion</a></li>
            <?php elseif(isset($_SESSION['name'])):?> 
                <li id="user">Bonjour <?= $_SESSION['name'] ?>
                    <a href="./controllers/deco.php" id="deco">Deco</a>
                </li>
            <?php endif ?>   
        </ul>   
    </nav>
</header>
