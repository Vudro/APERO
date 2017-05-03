<?php

include "config.php";

if(!isset($_REQUEST['a'])) $action = 'null'; else $action = $_REQUEST['a'];

switch($action) {
    case 'ajaxCreationStatus':
        $DB->setStatusTo($_POST['id'],'creation',$_POST['status']);
        echo 1;
        break;
    default:
        echo 'AJAX OK';
        break;
}

