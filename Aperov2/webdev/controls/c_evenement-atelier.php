<?php!isset($_REQUEST['a']) ? $_action = '' : $_action = $_REQUEST['a'];switch($_action) {	default:        include URI_VUE . '/evenement-atelier/v_evenement-atelier.php';    break;}