<?php
!isset($_REQUEST['a']) ? $_action = '' : $_action = $_REQUEST['a'];

switch($_action) {
    default:
        //Récupération des informations de la vue associé
        if (isset($_POST['nomLivre']) && isset($_POST['etatExemplaire']) && isset($_POST['nomEtat']) && isset($_POST['familleVente'])) {
            if (!empty($_POST['nomLivre'])&& !empty($_POST['etatExemplaire']) && !empty($_POST['nomEtat'])&& !empty($_POST['familleVente'])) {
                $DB->exemplaireFamille($_POST['nomLivre'], $_POST['etatExemplaire'], $_POST['nomEtat'], $_POST['familleVente']);
                add_message('success', 'Le formulaire a été envoyé');
            } else {
                add_message('danger', 'Un des champs est vide');
            }
        }

        //Récupération des informations pour remplir la liste déroulante
        $nomLivre = $DB->afficherLivre();
        $matierre = $DB->afficherMatiere();
        $exemplaireEtat = $DB->afficherExemplaire();
        $nomEtat = $DB->afficherEtat();
        $decote = $DB->afficherEtat();
        $familleVente = $DB->afficherFamille();

        include URI_VUE . '/exemplaire/v_exemplaire.php';
        break;
}
