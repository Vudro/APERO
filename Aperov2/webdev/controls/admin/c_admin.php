<?phpif(!isset($_REQUEST['a'])) $action = 'null'; else $action = $_REQUEST['a'];switch($action) {    case 'logout':        unset($_SESSION['user']);        add_message('success','Deconnecté !');        header('Location: ?c=admin');        exit;        break;    case 'login':        if (isset($_POST['username']) && isset($_POST['password'])) {            if (!empty($_POST['password']) && !empty($_POST['username'])) {                $result = $DB->connect($_POST['username'], $_POST['password']);                $result = $result[0];                if ($result['nb'] == 1 && $result['id'] > 0) {                    $_SESSION['user']['id'] = $result['id'];                    // OK                    add_message('success','connecté !');                    header('Location: ?c=admin');                    exit;                } else {                    // KO                    add_message('danger','Mauvais login !');                }            } else {                add_message('danger', 'Un ou plusieurs champs incorrect !');            }        }        include URI_VUE . '/admin/v_connexion.php';        break;    default:        if(!userIsConnected()){            header('Location: ?c=admin&a=login');            exit;        } else {            header('Location:'.URL);            exit;        }    break;}