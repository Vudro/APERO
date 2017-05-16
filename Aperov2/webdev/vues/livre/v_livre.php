<h1 class="text-center">Ajouter un livre</h1>
<p>Ajouter ici les nouveaux livres.
    <!--Formulaire pour récupérer les informations pour le controleur-->
<form role="form" action="" method="post">
    <label for="nomLivre">Nom du livre :</label>
    <input class="u-full-width" id="nomLivre" name="nomLivre" value="<?php if(isset($_POST['nomLivre'])){ echo $_POST['nomLivre']; } ?>">
    <label for="editionLivre">Edition du Livre :</label>
    <input class="u-full-width" id="editionLivre" name="editionLivre" value="<?php if(isset($_POST['editionLivre'])){ echo $_POST['editionLivre']; } ?>">
    <label for="prixNeuf">Prix neuf du livre :</label>
    <input class="u-full-width" id="prixNeuf" name="prixNeuf" value="<?php if(isset($_POST['prixNeuf'])){ echo $_POST['prixNeuf']; } ?>">
    <label for="matiere">Matière :</label>
    <!--  Liste déroulante prenant les informations de la BDD de la table etablissement  -->
    <select name="matiere" value="<?php if(isset($_POST['matiere'])){ echo $_POST['matiere']; } ?>">
        <option selected="selected">Selectionnez</option>
        <?php foreach ($matierre as $k => $d) { ?>
        <option value="<?php echo $d['nommatiere']; ?>"><?php echo $d['nommatiere']; ?></option>
        <?php } ?>
    </select>

    <br>
    <button class="button-primary" type="submit">Envoyer</button>
    <a href="?c=matiere"> <button class="button-primary" type="button">Ajouter matière</button></a>
    <?php echo display_message(); ?>
</form>