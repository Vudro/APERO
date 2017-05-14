<h1 class="text-center">Vente</h1>
<p>Affichage des ventes des exemplaires.</p>
<form role="form" action="" method="post">
    <label for="famille">Famille :</label>
    <select name="famille">
        <option selected="selected">Selectionnez</option>
        <?php foreach ($famille as $k => $d) { ?>
            <option value="<?php echo $d['nomfamille']; ?>"><?php echo $d['nomfamille']; ?></option>
        <?php } ?>
    </select>

    <label for="exemplaireAchat">Exemplaire acheté : ajouter condition sur famille sélectionné</label>
    <table>
        <tr>
            <td>Nom Livre</td>
            <td>Prix</td>
        </tr>

        <tbody>
        <?php foreach($exemplaireAchat as $k => $d){ ?>
            <tr>
                <td><?php echo $d['nomlivre']; ?></td>
                <td><?php echo $d['prixneuf']; ?></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>

    <label for="exemplaireVente">Exemplaire à vendre : ajouter condition sur famille sélectionné</label>
    <table>
        <tr>
            <td>Nom Livre</td>
            <td>Prix</td>
        </tr>

        <tbody>
        <?php foreach($exemplaireVente as $k => $d){ ?>
            <tr>
                <td><?php echo $d['nomlivre']; ?></td>
                <td><?php echo $d['prixneuf']; ?></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>

    <label for="exemplaireVendu">Exemplaire vendu : ajouter condition sur famille sélectionné</label>
    <table>
        <tr>
            <td>Nom Livre</td>
            <td>Prix</td>
        </tr>

        <tbody>
        <?php foreach($exemplaireVendu as $k => $d){ ?>
            <tr>
                <td><?php echo $d['nomlivre']; ?></td>
                <td><?php echo $d['prixneuf']; ?></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>

</form>