<h1 class="text-center">Vente</h1>
<p>Affichage des ventes des exemplaires.</p>
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

    <label for="exemplaireAchat">Exemplaire acheté : ajouter condition sur famille sélectionné</label>
<!--  Tableau permettant l'affichage de toutes les achats des familles
  Manque à récupérer l'id de la famille au dessus pour afficher les achats de la famille sélectionnée uniquement-->
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
    <!--  Tableau permettant l'affichage de toutes les ventes des familles
  Manque à récupérer l'id de la famille au dessus pour afficher les ventes de la famille sélectionnée uniquement-->
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
    <!--  Tableau permettant l'affichage de toutes les exemplaire non vendu des familles
  Manque à récupérer l'id de la famille au dessus pour afficher les non vendu de la famille sélectionnée uniquement-->
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