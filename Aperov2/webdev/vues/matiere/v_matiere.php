<h1 class="text-center">Ajouter une matiere</h1>
<p>Ajouter ici les nouveaux livres.</p>
<form role="form" action="" method="post">
    <label for="nomMatiere">Nom de la matière :</label>
    <input class="u-full-width" id="nomMatiere" name="nomMatiere" value="<?php if(isset($_POST['nomMatiere'])){ echo $_POST['nomMatiere']; } ?>">
    <br>
    <button class="button-primary" type="submit">Enregistrer</button>
    <a href="?c=livre"><button class="button-primary" type="button">Retour</button></a>
    <?php echo display_message(); ?>
</form>