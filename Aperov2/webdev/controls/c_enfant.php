<?php
!isset($_REQUEST['a']) ? $_action = '' : $_action = $_REQUEST['a'];

switch($_action) {
    default:
        //Récupération des informations de la vue associé
        if (isset($_POST['nomEnfant']) && isset($_POST['prenomEnfant'])  && isset($_POST['classe']) && isset($_POST['nivEnfant'])) {
            if (!empty($_POST['nomEnfant']) && !empty($_POST['prenomEnfant']) && !empty($_POST['classe']) && !empty($_POST['nivEnfant'])) {
                $DB->ajoutEnfant($_POST['nomEnfant'], $_POST['prenomEnfant'], $_POST['classe'], $_POST['nivEnfant']);
                add_message('success', 'Le formulaire a été envoyé');
            } else {
                add_message('danger', 'Un des champs est vide');
            }
        }
        include URI_VUE . '/enfant/v_enfant.php';
        break;

}