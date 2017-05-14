<p>Enregistrer ici un exemplaire à une famille.</p>
<!--Formulaire pour récupérer les informations pour le controleur-->
<form role="form" action="" method="post">
    <h3>Achat de l'exemplaire par une famille :</h3>
    <label for="familleAchat">Famille acheteuse :</label>
    <!--  Liste déroulante prenant les informations de la BDD de la table famille  -->
    <select name="familleAchat" value="<?php if(isset($_POST['familleAchat'])){ echo $_POST['familleAchat']; } ?>">
        <option selected="selected">Selectionnez</option>
        <?php foreach ($familleAchat as $k => $d) { ?>
            <option value="<?php echo $d['nomfamille']; ?>"><?php echo $d['nomfamille']; ?></option>
        <?php } ?>
    </select>

    <label for="exemplaire">Exemplaire : recupérer id livre pour requete</label>
    <!--  Liste déroulante prenant les informations de la BDD de la table exemplaire  -->
    <select name="exemplaire" value="<?php if(isset($_POST['exemplaire'])){ echo $_POST['exemplaire']; } ?>">
        <option selected="selected">Selectionnez</option>
        <?php foreach ($nomlivre as $k => $d) { ?>
            <option value="<?php echo $d['nomlivre']; ?>"><?php echo $d['nomlivre']; ?></option>
        <?php } ?>
    </select>
    <br>
    <button class="button-primary" type="submit">Valider</button>
    <a href="?c=exemplaire"><button class="button-primary" type="button">Retour</button></a>
</form>