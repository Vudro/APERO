
<!-- ceci est le menu principal il évolue selon la variable session-->

<div id="sidebar"> 
    <ul class="vmenu">
	
        <li>
            <a href="?">Accueil</a>
        </li>
        <li>
            <a href="?page=adherent">Adhérents</a>
        </li>
        <li>
            <a href="ajoutEF.php">Articles</a>
        </li>
        <li>
            <a href="presentation.php">Qui suis je ?</a>
        </li>
        <?php
        if (isset($_SESSION['user']) && ($_SESSION['user']=="admin")) {
            // un admin est loggé
            include_once('menuadmin.inc.php');
        }
        ?>
    </ul>
</div>