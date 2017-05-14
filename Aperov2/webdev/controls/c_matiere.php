<?php
!isset($_REQUEST['a']) ? $_action = '' : $_action = $_REQUEST['a'];

switch($_action) {
    default:
        if (isset($_POST['nomMatiere'])) {
            if (!empty($_POST['nomMatiere'])) {
                $DB->ajoutMatiere($_POST['nomMatiere']);
                add_message('success', 'Le formulaire a été envoyé');
            } else {
                add_message('danger', 'le champ est vide');
            }
        }
        include URI_VUE . '/matiere/v_matiere.php';
        break;
}
