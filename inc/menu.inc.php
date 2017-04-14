
<!-- ceci est le menu principal il évoluue selon la variable session--> 

<div id="sidebar"> 
	<ul class="vmenu">
	
		<li>
		<a href="index.php">Accueil</a>
		</li>	
		<li>
		<a href="ajoutlivreclasse.php">Créations</a>
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