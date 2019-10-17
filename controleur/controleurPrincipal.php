<?php

function controleurPrincipal($action){
    $lesActions = array();
    $lesActions["defaut"] = "listeSalles.php";
    $lesActions["liste"] = "listeSalles.php";
    $lesActions["connexion"] = "connexion.php";
    $lesActions["deconnexion"] = "deconnexion.php";
    $lesActions["detail"] = "detailSalle.php";
    $lesActions["inscription"] = "inscription.php";

    
    if (array_key_exists ( $action , $lesActions )){
        return $lesActions[$action];
    }
    else{
        return $lesActions["defaut"];
    }

}

?>