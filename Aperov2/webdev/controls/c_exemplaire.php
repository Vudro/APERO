<?php
!isset($_REQUEST['a']) ? $_action = '' : $_action = $_REQUEST['a'];

switch($_action) {
    default:
        //Récupération des informations pour remplir la liste déroulante
        $nomLivre = $DB->afficherLivre();
        $matierre = $DB->afficherMatiere();
        $nomEtat = $DB->afficherEtat();
        $familleVente = $DB->afficherFamille();
        $var;
        //Récupération des informations de la vue associé
        if (isset($_POST['nomLivre']) && isset($_POST['nomEtat']) && isset($_POST['familleVente'])) {
            if (!empty($_POST['nomLivre']) && !empty($_POST['nomEtat'])&& !empty($_POST['familleVente'])) {
                $DB->exemplaireFamille($_POST['nomLivre'], $_POST['nomEtat'], $_POST['familleVente']);
                $DB->getLastQuery();
                $result=$DB->prixExemplaire($_POST['nomLivre'], $_POST['nomEtat']);
                global $var;
                $var=$result;
                add_message('success', 'Le formulaire a été envoyé');
            } else {
                add_message('danger', 'Un des champs est vide');
            }
        }
        include URI_VUE . '/exemplaire/v_exemplaire.php';
        break;
}
