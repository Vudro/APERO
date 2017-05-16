<h1 class="text-center">Ajouter un enfant</h1>
<!--Formulaire pour récupérer les informations pour le controleur-->
<form role="form" action="" method="post">
    <a href="?c=affecterEnfant"> <button class="button-primary" type="button">Affecter un enfant à une famille</button></a>
    <h4>Ajouter un nouvel enfant :</h4>
    <label for="nomEnfant">Nom de l'enfant :</label>
    <input class="u-full-width" id="nomEnfant" name="nomEnfant" value="<?php if(isset($_POST['nomEnfant'])){ echo $_POST['nomEnfant']; } ?>">
    <label for="prenomEnfant">Prenom :</label>
    <input class="u-full-width" id="prenomEnfant" name="prenomEnfant" value="<?php if(isset($_POST['prenomEnfant'])){ echo $_POST['prenomEnfant']; } ?>">
    <label for="classe">Classe :</label>
    <input class="u-full-width" id="classe" name="classe" value="<?php if(isset($_POST['classe'])){ echo $_POST['classe']; } ?>">
    <label for="nivEnfant">Section :</label>
    <input class="u-full-width" id="nivEnfant" name="nivEnfant" value="<?php if(isset($_POST['nivEnfant'])){ echo $_POST['nivEnfant']; } ?>">

    <button class="button-primary" type="submit">Enregistrer</button>
    <a href="?c=listeFamille"><button class="button-primary" type="button">Liste des familles</button></a>
    <?php echo display_message(); ?>
</form>