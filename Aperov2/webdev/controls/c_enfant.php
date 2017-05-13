<?php
!isset($_REQUEST['a']) ? $_action = '' : $_action = $_REQUEST['a'];

switch($_action) {
    default:
        include URI_VUE . '/enfant/v_enfant.php';
        break;

}