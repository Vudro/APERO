<?php
!isset($_REQUEST['a']) ? $_action = '' : $_action = $_REQUEST['a'];

switch($_action) {
    default:
        $listeFamille=$DB->afficherFamilleEnfant();
        include URI_VUE . '/listeFamille/v_listeFamille.php';
        break;

}