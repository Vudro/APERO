<?php
!isset($_REQUEST['a']) ? $_action = '' : $_action = $_REQUEST['a'];

switch($_action) {
    default:
        $matierre = $DB->afficherMatiere();
        include URI_VUE . '/livre/v_livre.php';
        break;
}
