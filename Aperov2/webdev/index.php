<?phpinclude "config.php";include URI_STRUCTURE."header.php";!isset($_REQUEST['c']) ? $_controler = 'home' : $_controler = $_REQUEST['c'];switch ( $_controler ) {    // guest part    case 'famille' :        include URI_CONTROL . "c_famille.php";        break;    case 'ajoutClasse' :        include URI_CONTROL . "c_ajoutClasse.php";        break;    case 'affecterClasse' :        include URI_CONTROL . "c_affecterClasse.php";        break;    case 'exemplaire' :        include URI_CONTROL . "c_exemplaire.php";        break;    case 'enfant' :        include URI_CONTROL . "c_enfant.php";        break;    case 'listeFamille' :        include URI_CONTROL . "c_listeFamille.php";        break;    case 'affecterEnfant' :        include URI_CONTROL . "c_affecterEnfant.php";        break;    case 'remboursement' :        include URI_CONTROL . "c_remboursement.php";        break;    case 'ajoutEtablissement' :        include URI_CONTROL . "c_ajoutEtablissement.php";        break;    case 'matiere' :        include URI_CONTROL . "c_matiere.php";        break;    case 'livre' :        include URI_CONTROL . "c_livre.php";        break;    case 'vente' :        include URI_CONTROL . "c_vente.php";        break;    case 'affecterLivre' :        include URI_CONTROL . "c_affecterLivre.php";        break;    default :        include URI_CONTROL . "c_home.php";        break;}include URI_STRUCTURE."footer.php";