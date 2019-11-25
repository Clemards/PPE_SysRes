<?php
 
 function controleurPrincipal($action) {
    $lesActions = array();
    $lesActions["defaut"] = "accueil.php";
    $lesActions["connexion"] = "connexion.php";
    $lesActions["liste"] = "listeSalles.php";
    $lesActions["inscription"] = "inscription.php";
    $lesActions["deconnexion"] = "deconnexion.php";
    $lesActions["profil"] = "profil.php";
    $lesActions["detail"] = "accueil.php";
    $lesActions["creer"] = "creerPoste.php";
    $lesActions["modifier"] = "modifierPoste.php";
 
    if (array_key_exists($action, $lesActions)) {
        $action = (isset($_GET["action"])) ? $_GET["action"] : $action = (!isset($_SESSION)) ? "connexion" : "defaut";
        return $lesActions[$action];
    }
    else {
        return $lesActions["defaut"];
    }
}
 

