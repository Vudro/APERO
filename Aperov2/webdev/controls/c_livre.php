<?php
!isset($_REQUEST['a']) ? $_action = '' : $_action = $_REQUEST['a'];

switch($_action) {
    default:
        if (isset($_POST['nomLivre']) && isset($_POST['editionLivre']) && isset($_POST['prixNeuf']) && isset($_POST['matiere'])) {
            if (!empty($_POST['nomLivre']) && !empty($_POST['editionLivre']) && !empty($_POST['prixNeuf']) && !empty($_POST['matiere'])) {
                $DB->ajoutLivre($_POST['nomLivre'], $_POST['editionLivre'], $_POST['prixNeuf'], $_POST['matiere']);
                add_message('success', 'Le formulaire a été envoyé');
            } else {
                add_message('danger', 'Un des champs est vide');
            }
        }
        $matierre = $DB->afficherMatiere();
        include URI_VUE . '/livre/v_livre.php';
        break;
}
