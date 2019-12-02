<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}
include_once "$racine/modele/authentification.inc.php";

// appel des fonctions utiles
logout();
                
// appel du script de vue qui permet de gerer l'affichage des donnees
$titre = "authentification";
include "$racine/vue/entete.html.php";
include "$racine/vue/vueDeconnexion.php";
include "$racine/vue/pied.html.php";


?>