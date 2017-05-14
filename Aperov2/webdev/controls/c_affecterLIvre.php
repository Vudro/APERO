<?php
!isset($_REQUEST['a']) ? $_action = '' : $_action = $_REQUEST['a'];

switch($_action) {
    default:
        //Récupération des informations de la vue associé
        if (isset($_POST['nivClasse']) && isset($_POST['section']) && isset($_POST['etablissement']) && isset($_POST['nomlivre'])) {
            if (!empty($_POST['nivClasse']) && !empty($_POST['section']) && !empty($_POST['etablissement']) && !empty($_POST['nomlivre'])) {
                $DB->affecterLivre($_POST['nivClasse'], $_POST['section'], $_POST['etablissement'], $_POST['nomlivre']);
                add_message('success', 'Le formulaire a été envoyé');
            } else {
                add_message('danger', 'Un des champs est vide');
            }
        }

        //Récupération des informations pour remplir la liste déroulante
        $classe = $DB->afficherClasse();
        $etablissement = $DB->afficherEtablissement();
        $exemplaire = $DB->afficherLivreClasse();
        
        include URI_VUE . '/affecterLivre/v_affecterLivre.php';
        break;
}
