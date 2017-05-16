<h1 class="text-center">Enregistrer un exemplaire</h1>
<p>Enregistrer ici un exemplaire à une famille.</p>
<!--Formulaire pour récupérer les informations pour le controleur-->
<form role="form" action="" method="post">
    <label for="nomLivre">Nom du livre :</label>
    <!--  Liste déroulante prenant les informations de la BDD de la table livre -->
    <select name="nomLivre" value="<?php if(isset($_POST['nomLivre'])){ echo $_POST['nomLivre']; } ?>">
        <option selected="selected">Selectionnez</option>
        <?php foreach ($nomLivre as $k => $d) { ?>
            <option value="<?php echo $d['nomlivre']; ?>"><?php echo $d['nomlivre']; ?></option>
        <?php } ?>
    </select>

    <label for="nomEtat">Etat physique de l'exemplaire :</label>
    <!--  Liste déroulante prenant les informations de la BDD de la table etat -->
    <select name="nomEtat" value="<?php if(isset($_POST['nomEtat'])){ echo $_POST['nomEtat']; } ?>">
        <option selected="selected">Selectionnez</option>
        <?php foreach ($nomEtat as $k => $d) { ?>
            <option value="<?php echo $d['nometat']; ?>"><?php echo $d['nometat']; ?></option>
        <?php } ?>
    </select>

    <label for="familleVente">Famille vendeuse :</label>
    <!--  Liste déroulante prenant les informations de la BDD de la table famille -->
    <select name="familleVente" value="<?php //if(isset($_POST['decote'])){ echo $_POST['decote']; } ?>">
        <option selected="selected">Selectionnez</option>
        <?php foreach ($familleVente as $k => $d) { ?>
            <option value="<?php echo $d['nomfamille']; ?>"><?php echo $d['nomfamille']; ?></option>
        <?php } ?>
    </select>

    <label for="prixExemplaire">Prix de l'exemplaire :</label>
    <input class="u-full-width" id="prixExemplaire" name="prixExemplaire" value="Le prix de l'exemplaire est <?php if (isset($var) && !empty($var)){echo $var;}; ?> €">

    <br>
    <button class="button-primary" type="submit">Enregistrer</button>
    <a href="?c=affecterFamille"><button class="button-primary" type="button">Achat par une famille</button></a>
    <?php echo display_message(); ?>
</form>