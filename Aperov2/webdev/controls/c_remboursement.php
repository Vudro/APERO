<?php
!isset($_REQUEST['a']) ? $_action = '' : $_action = $_REQUEST['a'];

switch($_action) {
    default:
        //Récupération des informations pour remplir la liste déroulante
        $famille = $DB->afficherFamille();
        $nom;
        $vente;
        $rendu;
        $vendu;
        $aAcheter;

        if (isset($_POST['famille']) && !empty($_POST['famille'])){
            global $vente, $nom, $vendu, $rendu, $aAcheter;
            $resultVendu = $DB->exemplaireVendu2($_POST['famille']);
            $vente=$resultVendu;
            $nom=$_POST['famille'];
            //Calcul de la décote de l'exemplaire
            foreach ($resultVendu as $k => $d){
                $vendu+=$DB->prixExemplaire($d['nomlivre'], $d['nometat']);
            }
            $aAcheter=$DB->siAcheter($_POST['famille']);
            if ($vendu > 100 && $aAcheter=0 || empty($aAcheter)){
                $rendu = $vendu-($vendu*0.1)-10;
            }elseif ($vendu > 100){
                $rendu = $vendu-($vendu*0.1)-5;
            }
            else {
                $rendu = $vendu-($vendu*0.2);
            }
        }

        include URI_VUE . '/remboursement/v_remboursement.php';
        break;
}
