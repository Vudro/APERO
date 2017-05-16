<h1 class="text-center">Remboursement</h1>
<p>Affichage des remboursements des familles.</p>
<!--Formulaire pour récupérer les informations pour le controleur-->
<form role="form" action="" method="post">
    <label for="famille">Famille :</label>
    <!--  Liste déroulante prenant les informations de la BDD de la table famille  -->
    <select name="famille">
        <option selected="selected">Selectionnez</option>
        <?php foreach ($famille as $k => $d) { ?>
            <option value="<?php echo $d['nomfamille']; ?>"><?php echo $d['nomfamille']; ?></option>
        <?php } ?>
    </select>

    <button class="button-primary" type="submit">Valider</button>
    <?php if (isset($nom) && !empty($nom)){echo "Nom de famille sélectionné : $nom ";} ?>

    <label for="remboursement">Gain de la vente de livre : <?php if (isset($vendu) && !empty($vendu)){echo $vendu;} ?>€</label>
    <label>Somme dû à la famille : <?php if (isset($rendu) && !empty($rendu)){echo $rendu;} ?></label>
</form>