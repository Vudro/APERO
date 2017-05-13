<h1 class="text-center">Ajouter une enfant</h1>
<p>Ajouter ici une enfant.</p>
<div class="content">
    <div class="row">
        <div class="col-4">
            <label for="nomEnfant">Nom de la famille :</label>
            <input class="u-full-width" id="nomEnfant" name="nomEnfant" value="<?php if(isset($_POST['nomEnfant'])){ echo $_POST['nomEnfant']; } ?>">
            <label for="prenomEnfant">Prenom de la famille :</label>
            <input class="u-full-width" id="prenomEnfant" name="prenomEnfant" value="<?php if(isset($_POST['prenomEnfant'])){ echo $_POST['prenomEnfant']; } ?>">
            <label for="adresseEnfant">Adresse de la famille :</label>
            <input class="u-full-width" id="adresseEnfant" name="adresseEnfant" value="<?php if(isset($_POST['adresseEnfant'])){ echo $_POST['adresseEnfant']; } ?>">
            <label for="cpEnfant">Code postal de la famille :</label>
            <input class="u-full-width" id="cpEnfant" name="cpEnfant" value="<?php if(isset($_POST['cpEnfant'])){ echo $_POST['cpEnfant']; } ?>">
            <label for="telEnfant">Téléphone de la famille :</label>
            <input class="u-full-width" id="telEnfant" name="telEnfant" value="<?php if(isset($_POST['telEnfant'])){ echo $_POST['telEnfant']; } ?>">
            <label for="maiEnfant">Mail de la famille :</label>
            <input class="u-full-width" id="mailEnfant" name="mailEnfant" value="<?php if(isset($_POST['mailEnfant'])){ echo $_POST['mailEnfant']; } ?>">
            <label for="villeEnfant">Ville de la famille :</label>
            <input class="u-full-width" id="villeEnfant" name="villeEnfant" value="<?php if(isset($_POST['villeEnfant'])){ echo $_POST['villeEnfant ']; } ?>">
            <button class="button-primary" type="submit">Enregistrer</button>
            <button class="button-primary" type="button">Liste des familles</button>
        </div>
    </div>
</div>