<h1 class="text-center">Affecter un livre</h1>
<p>Affecter un livre à une classe.</p>
<form role="form" action="" method="post">
    <label for="nivClasse">Niveau de la classe :</label>
    <select name="nivClasse">
        <option selected="selected">Selectionnez</option>
        <?php foreach ($classe as $k => $d) { ?>
            <option value="<?php echo $d['niveauclasse']; ?>"><?php echo $d['niveauclasse']; ?></option>
        <?php } ?>
    </select>

    <label for="section">Section de la classe :</label>
    <select name="section">
        <option selected="selected">Selectionnez</option>
        <?php foreach ($classe as $k => $d) { ?>
            <option value="<?php echo $d['section']; ?>"><?php echo $d['section']; ?></option>
        <?php } ?>
    </select>

    <label for="etablissement">Nom de l'établissement :</label>
    <select name="etablissement">
        <option selected="selected">Selectionnez</option>
        <?php foreach ($etablissement as $k => $d) { ?>
            <option value="<?php echo $d['nometablissement']; ?>"><?php echo $d['nometablissement']; ?></option>
        <?php } ?>
    </select>

    <label for="nomlivre">Nom du livre :</label>
    <select name="nomlivre">
        <option selected="selected">Selectionnez</option>
        <?php foreach ($exemplaire as $k => $d) { ?>
            <option value="<?php echo $d['nomlivre']; ?>"><?php echo $d['nomlivre']; ?></option>
        <?php } ?>
    </select>
    <br>
    <button class="button-primary" type="button">Ajouter etablissement</button>
    <button class="button-primary" type="button">Supprimer etablissement</button>
    <button class="button-primary" type="submit">Enregistrer</button>
</form>