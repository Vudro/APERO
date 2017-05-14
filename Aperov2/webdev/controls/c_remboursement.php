<?php
!isset($_REQUEST['a']) ? $_action = '' : $_action = $_REQUEST['a'];

switch($_action) {
    default:
        $famille = $DB->afficherFamille();
        $remboursement = $DB->remboursement();
        $remboursement2 = $DB->remboursement2();
        $data=floatval($remboursement2[0]['decote'])*floatval($remboursement[0]['prixneuf']);
        include URI_VUE . '/remboursement/v_remboursement.php';
        break;
}
