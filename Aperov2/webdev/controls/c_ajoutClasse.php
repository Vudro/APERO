<?php
!isset($_REQUEST['a']) ? $_action = '' : $_action = $_REQUEST['a'];

switch($_action) {
    default:
        if (isset($_POST['classe']) && isset($_POST['section'])) {
            if (!empty($_POST['classe']) && !empty($_POST['section'])) {
                $DB->ajoutClasse($_POST['classe'], $_POST['section']);
                add_message('success', 'Le formulaire a été envoyé');
            } else {
                add_message('danger', 'le champ est vide');
            }
        }
        include URI_VUE . '/ajoutClasse/v_ajoutClasse.php';
        break;
}
