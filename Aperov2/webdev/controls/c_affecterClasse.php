<?php
!isset($_REQUEST['a']) ? $_action = '' : $_action = $_REQUEST['a'];

switch($_action) {
    default:
        if (isset($_POST['etablissement']) && isset($_POST['classe']) && isset($_POST['section'])) {
            if (!empty($_POST['etablissement']) && !empty($_POST['classe']) && !empty($_POST['section'])) {
                $DB->affecterClasse($_POST['etablissement'], $_POST['classe'], $_POST['section']);
                add_message('success', 'Le formulaire a été envoyé');
            } else {
                add_message('danger', 'Un des champs est vide');
            }
        }
        $etablissement=$DB->afficherEtablissement();
        $classe=$DB->afficherClasseAffecter();
        include URI_VUE . '/affecterClasse/v_affecterClasse.php';
        break;
}
