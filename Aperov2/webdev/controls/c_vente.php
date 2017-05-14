<?php
!isset($_REQUEST['a']) ? $_action = '' : $_action = $_REQUEST['a'];

switch($_action) {
    default:
        //Récupération des informations pour remplir la liste déroulante
        $famille = $DB->afficherFamille();
        $exemplaireAchat = $DB->exemplaireAcheter();
        $exemplaireVente = $DB->exemplaireVente();
        $exemplaireVendu = $DB->exemplaireVendu();

        include URI_VUE . '/vente/v_vente.php';
        break;
}
