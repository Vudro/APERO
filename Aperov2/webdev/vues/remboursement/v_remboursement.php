<h1 class="text-center">Remboursement</h1>
<p>Affichage des remboursements des familles.</p>
<form role="form" action="" method="post">
    <label for="famille">Famille :</label>
    <select name="famille">
        <option selected="selected">Selectionnez</option>
        <?php foreach ($famille as $k => $d) { ?>
            <option value="<?php echo $d['nomfamille']; ?>"><?php echo $d['nomfamille']; ?></option>
        <?php } ?>
    </select>

    <label for="remboursement">Remboursement : ajouter condition sur famille sélectionné</label>
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