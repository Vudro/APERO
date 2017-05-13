<?php
!isset($_REQUEST['a']) ? $_action = '' : $_action = $_REQUEST['a'];

switch($_action) {
    default:
        $nomLivre = $DB->afficherLivre();
        $matierre = $DB->afficherMatiere();
        $exemplaireEtat = $DB->afficherExemplaire();
        $nomEtat = $DB->afficherEtat();
        $decote = $DB->afficherEtat();
        $familleVente = $DB->familleVente();
        include URI_VUE . '/exemplaire/v_exemplaire.php';
        break;
}
