<h1 class="text-center">Ajouter une classe</h1>
<p>Ajouter ici de nouvelles classes.</p>
<!--Formulaire pour récupérer les informations pour le controleur-->
<form role="form" action="" method="post">
    <label for="classe">Nom de la classe :</label>
    <input class="u-full-width" id="classe" name="classe" value="<?php if(isset($_POST['classe'])){ echo $_POST['classe']; } ?>">
    <label for="section">Nom de la section :</label>
    <input class="u-full-width" id="section" name="section" value="<?php if(isset($_POST['section'])){ echo $_POST['section']; } ?>">

    <br>
    <button class="button-primary" type="submit">Enregistrer</button>
    <a href="?c=affecterClasse"><button class="button-primary" type="button">Affecter classe</button></a>
    <a href="?c=affecterLivre"><button class="button-primary" type="button">Retour</button></a>
    <?php echo display_message(); ?>
</form>