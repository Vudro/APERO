<?phpsession_start();// config dbdefine('DB_HOST','127.0.0.1');define('DB_NAME','webdev');define('DB_LOGIN','root');define('DB_PASS','');/* * Configuration de base des éléments * du header */$param_web_title        = 'Apero';$param_web              = 'Apero';$param_annee            = date("Y"); // date pour le copyright$param_web_small        = 'TS'; //params par défaut si pas remplis dans les pages$default_meta_desc      = 'Apero'; // meta description$default_meta_keywords  = ''; // meta keywords// define constant of projectdefine('URI',__DIR__.'/');//define('URL','http://localhost/webdev/');$website_url = explode('?', $_SERVER['REQUEST_URI'])[0];define('URL',"http://".$_SERVER['HTTP_HOST'].$website_url);define('URI_INC',URI.'inc/');define('URL_INC',URL.'inc/');define('URI_INC_CSS',URI_INC.'css/');define('URI_INC_JS',URI_INC.'js/');define('URI_INC_IMG',URI_INC.'img/');define('URL_INC_CSS',URL_INC.'css/');define('URL_INC_JS',URL_INC.'js/');define('URL_INC_IMG',URL_INC.'img/');define('URI_INC_FNC',URI_INC.'fnc/');define('URI_STRUCTURE',URI_INC.'structure/');define('URI_VUE',URI.'vues/');define('URL_VUE',URL.'vues/');define('URI_CONTROL',URI.'controls/');define('URL_CONTROL',URL.'controls/');define('URI_MODEL',URI.'models/');define('URL_MODEL',URL.'models/');// includeinclude URI_INC_FNC.'fnc.php';include URI_INC_FNC.'fnc_sanitize.php';include URI_INC_FNC.'fnc_debug.php'; // debuginclude URI_INC_FNC.'fnc_error.php';//load model !include URI_MODEL . 'm_db.php';$DB = new MainModel();