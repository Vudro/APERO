<?php
!isset($_REQUEST['a']) ? $_action = '' : $_action = $_REQUEST['a'];

switch($_action) {
    default:
        //Récupération des informations de la vue associé
        if (isset($_POST['enfant']) && isset($_POST['famille'])) {
            if (!empty($_POST['enfant']) && !empty($_POST['famille'])) {
                $DB->affecterEnfant($_POST['enfant'], $_POST['famille']);
                add_message('success', 'Le formulaire a été envoyé');
            } else {
                add_message('danger', 'Un des champs est vide');
            }
        }

        //Récupération des informations pour remplir la liste déroulante
        $enfant=$DB->afficherEnfant();
        $famille=$DB->afficherFamille();

        include URI_VUE . '/affecterEnfant/v_affecterEnfant.php';
        break;
}
