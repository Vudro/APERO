<?php
!isset($_REQUEST['a']) ? $_action = '' : $_action = $_REQUEST['a'];

switch($_action) {
    default:
        //Récupération des informations pour remplir la liste déroulante
        $famille = $DB->afficherFamille();
        $remboursement = $DB->remboursement();
        $remboursement2 = $DB->remboursement2();

        //Calcul de la décote de l'exemplaire
        $data=floatval($remboursement2[0]['decote'])*floatval($remboursement[0]['prixneuf']);

        include URI_VUE . '/remboursement/v_remboursement.php';
        break;
}
