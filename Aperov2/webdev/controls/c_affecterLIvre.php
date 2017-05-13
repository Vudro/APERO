<?php
!isset($_REQUEST['a']) ? $_action = '' : $_action = $_REQUEST['a'];

switch($_action) {
    default:
        $classe = $DB->afficherClasse();
        $etablissement = $DB->afficherEtablissement();
        $exemplaire = $DB->afficherLivreClasse();
        include URI_VUE . '/affecterLivre/v_affecterLivre.php';
        break;
}
