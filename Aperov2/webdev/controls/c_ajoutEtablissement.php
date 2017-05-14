<?php
!isset($_REQUEST['a']) ? $_action = '' : $_action = $_REQUEST['a'];

switch($_action) {
    default:
        //Récupération des informations de la vue associé
        if (isset($_POST['etablissement'])) {
            if (!empty($_POST['etablissement'])) {
                $DB->ajoutEtablissement($_POST['etablissement']);
                add_message('success', 'Le formulaire a été envoyé');
            } else {
                add_message('danger', 'le champ est vide');
            }
        }
        include URI_VUE . '/ajoutEtablissement/v_ajoutEtablissement.php';
        break;
}
