<h1 class="text-center">Affecter un exemplaire</h1>
<p>Affecter ici un exemplaire à une famille.</p>
<div class="content">
    <div class="row">
        <div class="col-4">
            <label for="nomLivre">Nom du livre :</label>
            <select name="nomLivre">
                <option selected="selected">Selectionnez</option>
                <?php foreach ($nomLivre as $k => $d) { ?>
                    <option value="<?php echo $d['nomlivre']; ?>"><?php echo $d['nomlivre']; ?></option>
                <?php } ?>
            </select>

            <label for="matiere">Matière :</label>
            <select name="matiere">
                <option selected="selected">Selectionnez</option>
                <?php foreach ($matierre as $k => $d) { ?>
                    <option value="<?php echo $d['nommatiere']; ?>"><?php echo $d['nommatiere']; ?></option>
                <?php } ?>
            </select>

            <label for="etatExemplaire">Etat de l'exemplaire :</label>
            <select name="etatExemplaire">
                <option selected="selected">Selectionnez</option>
                <?php foreach ($exemplaireEtat as $k => $d) { ?>
                    <option value="<?php echo $d['exemplaireetat']; ?>"><?php echo $d['exemplaireetat']; ?></option>
                <?php } ?>
            </select>

            <label for="nomEtat">Etat physique de l'exemplaire :</label>
            <select name="nomEtat">
                <option selected="selected">Selectionnez</option>
                <?php foreach ($nomEtat as $k => $d) { ?>
                    <option value="<?php echo $d['nometat']; ?>"><?php echo $d['nometat']; ?></option>
                <?php } ?>
            </select>

            <script>
                var data=0;
            $("select[name='matiere']").change( function()
            {
                data = $("select[name='matiere'] > option:selected").val();
            </script>

            <label for="prixNeuf">Prix du livre :</label>
            <input class="u-full-width" id="prixNeuf" name="prixNeuf" value="requete à faire">

            <label for="decote">Décote de l'exemplaire : requete à faire</label>
            <select name="decote">
                <option selected="selected">Selectionnez</option>
                <?php foreach ($decote as $k => $d) { ?>
                    <option value="<?php echo $d['decote']; ?>"><?php echo $d['decote']; ?></option>
                <?php } ?>
            </select>

            <label for="prixExemplaire">Prix de l'exemplaire :</label>
            <input class="u-full-width" id="prixExemplaire" name="prixExemplaire" value="calcul a faire">

            <label for="familleVente">Famille vendeuse :</label>
            <input class="u-full-width" id="familleVente" name="familleVente" value="requete à faire">

            <br>
            <button class="button-primary" type="submit">Enregistrer</button>
            <button class="button-primary" type="button">Liste des familles</button>
        </div>
    </div>
</div>