<?php 
session_start() 
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <!-- En-tête de la page : menu -->
        <meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
		<meta name="title" content="Accueil" />
		<meta name="description" content="site de l'association APERO"/>
		<meta name="keywords" content="association, livre, rentrée"/>
		<meta name="robots" content="index, follow"/>
		<meta name="viewport" content="width=device-width">
		
        <title>Logiciel Bourse aux Livres</title>
		
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
		<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css" />

    </head>

    <body>
        <div id="wrapper">
<!--            azeazeezaeea -->
        <!-- Corps de la page -->
		<header>
			<h1>Bienvenue sur le site interne de la Bourse aux livres </h1>
		</header>
		
		<nav>
			 <!-- Menu de navigation visible que lorce qu'on est connecter -->
			 <?php  include_once('inc/menu.inc.php') ?>
			 
		</nav>
		<section>
			<aside>
			
			</aside>
		</section>
		
        </div>
		<footer>
                        <?php include_once ('inc/footer.inc.php'); ?>
			<p>Copyright - Tous droits réservés</p>
		</footer>
        <script src="bootstrap/js/bootstrap.min.js"></script>
    </body>
	
</html>