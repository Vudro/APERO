<?php
!isset($_REQUEST['a']) ? $_action = '' : $_action = $_REQUEST['a'];

switch($_action) {
    default:
        //Récupération des informations pour remplir la liste déroulante
        $listeFamille=$DB->afficherFamilleEnfant();
        include URI_VUE . '/listeFamille/v_listeFamille.php';
        break;

}