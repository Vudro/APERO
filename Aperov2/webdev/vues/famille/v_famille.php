<h1 class="text-center">Ajouter une famille</h1>
<p>Ajouter ici une famille.</p>
<form role="form" action="" method="post">
    <label for="nomFamille">Nom de la famille :</label>
    <input class="u-full-width" id="nomFamille" name="nomFamille" value="<?php if(isset($_POST['nomFamille'])){ echo $_POST['nomFamille']; } ?>">
    <label for="adresseFamille">Adresse de la famille :</label>
    <input class="u-full-width" id="adresseFamille" name="adresseFamille" value="<?php if(isset($_POST['adresseFamille'])){ echo $_POST['adresseFamille']; } ?>">
    <label for="cpFamille">Code postal de la famille :</label>
    <input class="u-full-width" id="cpFamille" name="cpFamille" value="<?php if(isset($_POST['cpFamille'])){ echo $_POST['cpFamille']; } ?>">
    <label for="telFamille">Téléphone de la famille :</label>
    <input class="u-full-width" id="telFamille" name="telFamille" value="<?php if(isset($_POST['telFamille'])){ echo $_POST['telFamille']; } ?>">
    <label for="mailFamille">Mail de la famille :</label>
    <input class="u-full-width" id="mailFamille" name="mailFamille" value="<?php if(isset($_POST['mailFamille'])){ echo $_POST['mailFamille']; } ?>">
    <label for="villeFamille">Ville de la famille :</label>
    <input class="u-full-width" id="villeFamille" name="villeFamille" value="<?php if(isset($_POST['villeFamille'])){ echo $_POST['villeFamille']; } ?>">
    <button class="button-primary" type="submit">Enregistrer</button>
    <a href="?c=listeFamille"><button class="button-primary" type="button">Liste des familles</button></a>
</form>