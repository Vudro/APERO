<h1 class="text-center">Liste des familles</h1>
<form role="form" action="" method="post">
    <table>
        <tr>
            <td>Nom de famille</td>
            <td>Adresse</td>
            <td>Code postal</td>
            <td>Ville</td>
            <td>Téléphone</td>
            <td>Mail</td>
            <td>Prenom Enfant(s)</td>
            <td>niveau Enfant(s)</td>
            <td>classe Enfant(s)</td>
        </tr>

        <tbody>
        <?php foreach($listeFamille as $k => $d){ ?>
            <tr>
                <td><?php echo $d['nomfamille']; ?></td>
                <td><?php echo $d['adressefamille']; ?></td>
                <td><?php echo $d['cpfamille']; ?></td>
                <td><?php echo $d['villefamille']; ?></td>
                <td><?php echo $d['telfamille']; ?></td>
                <td><?php echo $d['mailfamille']; ?></td>
                <td><?php echo $d['prenomenfant']; ?></td>
                <td><?php echo $d['niveauenfant']; ?></td>
                <td><?php echo $d['classeenfant']; ?></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
    <a href="?c=famille"><button class="button-primary" type="button">Retour</button></a>
</form>