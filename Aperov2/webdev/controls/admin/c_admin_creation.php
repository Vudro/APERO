<?php

if(!userIsConnected()){
    header('Location: ?c=admin&a=login');
    exit;
}

if(!isset($_REQUEST['a'])) $action = 'null'; else $action = $_REQUEST['a'];

switch($action) {

    case 'create':
        if(isset($_POST['name']) && !empty($_POST['name'])){
            $date = new DateTime();
            $upload_path = URI_INC_IMG.'upload/';
            $filename = $date->getTimestamp().basename($_FILES['image']['name']);
            $uploadfile = $upload_path . $filename;
            move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile);
            $DB->creationCreate($_SESSION['user']['id'],$_POST['name'],$_POST['description'],$filename);

            // redirection
            header('Location: ?c=admin-creation');
            exit;
        }
        include URI_VUE . '/admin/creation/v_create.php';
        break;

    case 'delete':
        $creation = $DB->creationRead($_GET['id']);
        $creation = $creation[0];
        if(isset($_POST['delete']) && !empty($_POST['delete']) && $_POST['delete'] == 'oui'){
            $DB->creationDeleteSoft($_GET['id']);
            // redirection
            header('Location: ?c=admin-creation');
            exit;
        }
        include URI_VUE . '/admin/creation/v_delete.php';
        break;

    case 'update':
        $creation = $DB->creationRead($_GET['id']);
        $creation = $creation[0];
        if(isset($_POST['name']) && !empty($_POST['name'])){
            $DB->creationUpdate($_GET['id'],$_POST['name'],$_POST['description']);
            add_message('success','La modification a été effectué !',true);
            header('Location: ?c=admin-creation');
            exit;
        }
        include URI_VUE . '/admin/creation/v_update.php';
        break;

    default:
        $a_creation = $DB->creationRead(null,true);
        include URI_VUE . '/admin/creation/v_read.php';
        break;
}