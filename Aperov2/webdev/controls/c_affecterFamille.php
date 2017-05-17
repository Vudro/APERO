<?php
!isset($_REQUEST['a']) ? $_action = '' : $_action = $_REQUEST['a'];

switch($_action) {
    default:
        //Récupération des informations pour remplir la liste déroulante
        $familleAchat = $DB->afficherFamille();
        $decote = $DB->afficherEtatVente();
        $nomlivre = $DB->afficherLivreAchat();
        //Récupération des informations de la vue associé
    if (isset($_POST['familleAchat']) && isset($_POST['exemplaire']) && isset($_POST['decote'])) {
            if (!empty($_POST['familleAchat']) && !empty($_POST['exemplaire']) && !empty($_POST['decote'])) {
                $result=$DB->affecterExemplaireSelect($_POST['familleAchat'], $_POST['exemplaire'], $_POST['decote']);
                if (sizeof($result)==""){
                    add_message('danger', "Il n'y a pas d'exemplaire avec cet etat");
                }else{
                    $DB->affecterExemplaire($_POST['familleAchat'], $_POST['exemplaire'], $_POST['decote']);
                    $DB->vendu();
                    add_message('success', 'Le formulaire a été envoyé');
                }
            } else {
                add_message('danger', 'Un des champs est vide');
            }
        }

        include URI_VUE . '/affecterFamille/v_affecterFamile.php';
        break;
}
