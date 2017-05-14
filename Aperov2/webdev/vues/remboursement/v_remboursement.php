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

    <label for="remboursement">Remboursement : ajouter condition sur famille sélectionné</label>
<!--  Tableau devant permettre l'affichage des remboursements à la famille sélectionné
  Manque à récupérer l'id de la famille sélectionnée au dessus pour afficher uniquement les remboursements de cette famille -->
    <table>
        <tr>
            <td>Nom Livre</td>
            <td>Prix</td>
        </tr>
        <tr>
            <td>bla</td>
            <td><?php echo $data; ?></td>
        </tr>

<!--        <tbody>-->
<!--        --><?php //foreach($remboursement as $k => $d){ ?>
<!--            <tr>-->
<!--                <td>--><?php //echo $d['nomlivre']; ?><!--</td>-->
<!--                <td>--><?php //echo $d['prixneuf']; ?><!--</td>-->
<!--            </tr>-->
<!--        --><?php //} ?>
<!--        </tbody>-->
    </table>
</form>