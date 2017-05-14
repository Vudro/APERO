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

    <label for="etatExemplaire">Etat de l'exemplaire :</label>
    <!--  Liste déroulante prenant les informations de la BDD de la table exemplaire -->
    <select name="etatExemplaire" value="<?php if(isset($_POST['etatExemplaire'])){ echo $_POST['etatExemplaire']; } ?>">
        <option selected="selected">Selectionnez</option>
        <?php foreach ($exemplaireEtat as $k => $d) { ?>
            <option value="<?php echo $d['exemplaireetat']; ?>"><?php echo $d['exemplaireetat']; ?></option>
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

    <label for="prixNeuf">Prix du livre :</label>
    <input class="u-full-width" id="prixNeuf" name="prixNeuf" value="requete à faire" value="<?php// if(isset($_POST['prixNeuf'])){ echo $_POST['prixNeuf']; } ?>">

    <label for="decote">Décote de l'exemplaire : requete à faire</label>
    <!--  Liste déroulante prenant les informations de la BDD de la table decote  -->
    <select name="decote" value="<?php //if(isset($_POST['decote'])){ echo $_POST['decote']; } ?>">
        <option selected="selected">Selectionnez</option>
        <?php foreach ($decote as $k => $d) { ?>
            <option value="<?php echo $d['decote']; ?>"><?php echo $d['decote']; ?></option>
        <?php } ?>
    </select>

    <label for="prixExemplaire">Prix de l'exemplaire :</label>
    <input class="u-full-width" id="prixExemplaire" name="prixExemplaire" value="calcul a faire" value="<?php //if(isset($_POST['prixExemplaire'])){ echo $_POST['prixExemplaire']; } ?>">

    <label for="familleVente">Famille vendeuse :</label>
    <!--  Liste déroulante prenant les informations de la BDD de la table famille -->
    <select name="familleVente" value="<?php //if(isset($_POST['decote'])){ echo $_POST['decote']; } ?>">
        <option selected="selected">Selectionnez</option>
        <?php foreach ($familleVente as $k => $d) { ?>
            <option value="<?php echo $d['nomfamille']; ?>"><?php echo $d['nomfamille']; ?></option>
        <?php } ?>
    </select>

    <br>
    <button class="button-primary" type="submit">Enregistrer</button>
    <a href="?c=affecterFamille"><button class="button-primary" type="button">Achat par une famille</button></a>
</form>