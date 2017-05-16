<?php
!isset($_REQUEST['a']) ? $_action = '' : $_action = $_REQUEST['a'];

switch($_action) {
    default:
        //Récupération des informations pour remplir la liste déroulante
        $famille = $DB->afficherFamille();
        $exemplaireAchat;
        $exemplaireVente;
        $exemplaireVendu;
        $nom;

        if (isset($_POST['famille']) && !empty($_POST['famille'])){
            global $exemplaireAchat, $exemplaireVente, $exemplaireVendu, $nom;
            $resultAchat = $DB->exemplaireAcheter2($_POST['famille']);
            $resultVente = $DB->exemplaireVente2($_POST['famille']);
            $resultVendu = $DB->exemplaireVendu2($_POST['famille']);
            $exemplaireAchat=$resultAchat;
            $exemplaireVente=$resultVente;
            $exemplaireVendu=$resultVendu;
            $nom=$_POST['famille'];
        }

        include URI_VUE . '/vente/v_vente.php';
        break;
}
