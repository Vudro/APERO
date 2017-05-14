<h1 class="text-center">Affecter un livre</h1>
<p>Affecter un livre à une classe.</p>
<!--Formulaire pour récupérer les informations pour le controleur-->
<form role="form" action="" method="post">
    <div>
        <label for="nivClasse">Niveau de la classe :</label>
        <!--  Liste déroulante prenant les informations de la BDD de la table classe -->
        <select name="nivClasse" value="<?php if(isset($_POST['nivClasse'])){ echo $_POST['nivClasse']; } ?>">
            <option selected="selected">Selectionnez</option>
            <?php foreach ($classe as $k => $d) { ?>
                <option value="<?php echo $d['niveauclasse']; ?>"><?php echo $d['niveauclasse']; ?></option>
            <?php } ?>
        </select>
        <a href="?c=ajoutClasse"><button class="button-primary" type="button">Ajouter classe et section</button></a>
    </div>

    <label for="section">Section de la classe :</label>
    <!--  Liste déroulante prenant les informations de la BDD de la table section -->
    <select name="section" value="<?php if(isset($_POST['section'])){ echo $_POST['section']; } ?>">
        <option selected="selected">Selectionnez</option>
        <?php foreach ($classe as $k => $d) { ?>
            <option value="<?php echo $d['section']; ?>"><?php echo $d['section']; ?></option>
        <?php } ?>
    </select>

    <div>
        <label for="etablissement">Nom de l'établissement :</label>
        <!--  Liste déroulante prenant les informations de la BDD de la table etablissement -->
        <select name="etablissement" value="<?php if(isset($_POST['etablissement'])){ echo $_POST['etablissement']; } ?>">
            <option selected="selected">Selectionnez</option>
            <?php foreach ($etablissement as $k => $d) { ?>
                <option value="<?php echo $d['nometablissement']; ?>"><?php echo $d['nometablissement']; ?></option>
            <?php } ?>
        </select>
        <a href="?c=ajoutEtablissement"><button class="button-primary" type="button">Ajouter etablissement</button></a>
    </div>

    <label for="nomlivre">Nom du livre :</label>
    <!--  Liste déroulante prenant les informations de la BDD de la table livre -->
    <select name="nomlivre" value="<?php if(isset($_POST['nomlivre'])){ echo $_POST['nomlivre']; } ?>">
        <option selected="selected">Selectionnez</option>
        <?php foreach ($exemplaire as $k => $d) { ?>
            <option value="<?php echo $d['nomlivre']; ?>"><?php echo $d['nomlivre']; ?></option>
        <?php } ?>
    </select>
    <br>
    <button class="button-primary" type="submit">Enregistrer</button>
</form>