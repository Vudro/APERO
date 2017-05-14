<h1 class="text-center">Affecter une classe</h1>
<p>Affecter une classe à une établissement.</p>
<form role="form" action="" method="post">
    <label for="etablissement">Nom de l'établissement :</label>
    <select name="etablissement" value="<?php if(isset($_POST['etablissement'])){ echo $_POST['etablissement']; } ?>">
        <option selected="selected">Selectionnez</option>
        <?php foreach ($etablissement as $k => $d) { ?>
            <option value="<?php echo $d['nometablissement']; ?>"><?php echo $d['nometablissement']; ?></option>
        <?php } ?>
    </select>

    <label for="classe">Classe :</label>
    <select name="classe" value="<?php if(isset($_POST['classe'])){ echo $_POST['classe']; } ?>">
        <option selected="selected">Selectionnez</option>
        <?php foreach ($classe as $k => $d) { ?>
            <option value="<?php echo $d['niveauclasse']; ?>"><?php echo $d['niveauclasse']; ?></option>
        <?php } ?>
    </select>

    <label for="section">Section :</label>
    <select name="section" value="<?php if(isset($_POST['section'])){ echo $_POST['section']; } ?>">
        <option selected="selected">Selectionnez</option>
        <?php foreach ($classe as $k => $d) { ?>
            <option value="<?php echo $d['section']; ?>"><?php echo $d['section']; ?></option>
        <?php } ?>
    </select>

    <br>
    <button class="button-primary" type="submit">Enregistrer</button>
    <a href="?c=ajoutClasse"><button class="button-primary" type="button">Retour</button></a>
    <?php echo display_message(); ?>
</form>