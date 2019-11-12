<!-- Copyright Clément Arlandis, 2019 -->

<?php
include "getRacine.php";
include "$racine/controleur/controleurPrincipal.php";

if (isset($_GET["action"])) {
    $action = $_GET["action"];
}
else {
    if(!isset($_SESSION)){
        $action = "connexion";
    } else {
        $action = "defaut";
    }
}

//$action = (isset($_GET["action"])) ? $_GET["action"] : $action = (!isset($_SESSION)) ? "connexion" : "defaut";

if(isset($_SESSION)){
   echo $_SESSION;
}
echo $action;

$fichier = controleurPrincipal($action);
include "$racine/controleur/$fichier";
?>
