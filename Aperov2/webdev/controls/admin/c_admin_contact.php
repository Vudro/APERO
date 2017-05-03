<?php

if(!userIsConnected()){
    header('Location: ?c=admin&a=login');
    exit;
}

if(!isset($_REQUEST['a'])) $action = 'null'; else $action = $_REQUEST['a'];

switch($action) {

    case 'read':
        $DB->setStatusTo($_GET['id'], 'contact', 1);
        $vue = $DB->contactRead($_GET['id'])[0];
        $vue['message'] = str_replace("&lt;br /&gt;",'<br/>',$vue['message']);
        include URI_VUE . '/admin/contact/v_vueContact.php';
        break;

    case 'delete':
        if (isset($_POST['delete']) && $_POST['delete'] == 'oui') {
            $del = $DB->contactDeleteSoft($_GET['id']);
            header('Location: ?c=admin&a=contact');
            exit;
        }
        include URI_VUE . '/admin/contact/v_deleteContact.php';
        break;

    case 'reponse':
        $msg = $DB->contactRead($_GET['id'])[0];
        if (isset($_POST['message'])) {
            mail($msg['email'], "réponse", $_POST['message']);
        }
        include URI_VUE . '/admin/contact/v_reponseContact.php';
        break;

    default:
        $a_contact = $DB->contactRead();
        include URI_VUE . '/admin/contact/v_contact.php';
        break;
}