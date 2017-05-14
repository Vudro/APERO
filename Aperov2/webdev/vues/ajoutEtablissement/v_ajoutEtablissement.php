<h1 class="text-center">Ajouter un etablissement</h1>
<p>Ajouter ici les nouveaux etablissement.</p>
<form role="form" action="" method="post">
    <label for="etablissement">Nom de l'etablissement :</label>
    <input class="u-full-width" id="etablissement" name="etablissement" value="<?php if(isset($_POST['etablissement'])){ echo $_POST['etablissement']; } ?>">
    <br>
    <button class="button-primary" type="submit">Enregistrer</button>
    <a href="?c=affecterLivre"><button class="button-primary" type="button">Retour</button></a>
    <?php echo display_message(); ?>
</form>