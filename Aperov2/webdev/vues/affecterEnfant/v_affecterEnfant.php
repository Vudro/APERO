<h1 class="text-center">Affecter un Enfant</h1>
<p>Affecter un enfant à une famille.</p>
<!--Formulaire pour récupérer les informations pour le controleur-->
<form role="form" action="" method="post">
    <label for="enfant">Enfant à affecter :</label>
    <!--  Liste déroulante prenant les informations de la BDD de la table enfant  -->
    <select name="enfant" value="<?php if(isset($_POST['enfant'])){ echo $_POST['enfant']; } ?>">
        <option selected="selected">Selectionnez</option>
        <?php foreach ($enfant as $k => $d) { ?>
            <option value="<?php echo $d['nomenfant']; ?>"><?php echo $d['nomenfant']; ?></option>
        <?php } ?>
    </select>

    <label for="famille">Famille :</label>
    <!--  Liste déroulante prenant les informations de la BDD de la table famille  -->
    <select name="famille" value="<?php if(isset($_POST['famille'])){ echo $_POST['famille']; } ?>">
        <option selected="selected">Selectionnez</option>
        <?php foreach ($famille as $k => $d) { ?>
            <option value="<?php echo $d['nomfamille']; ?>"><?php echo $d['nomfamille']; ?></option>
        <?php } ?>
    </select>

    <br>
    <button class="button-primary" type="submit">Enregistrer</button>
    <a href="?c=enfant"><button class="button-primary" type="button">Retour</button></a>
    <?php echo display_message(); ?>
</form>