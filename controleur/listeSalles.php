<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}
include_once "$racine/modele/bd.salle.inc.php";

// appel des fonctions permettant de recuperer les donnees utiles a l'affichage 
$listeSalle = getSalles();

// traitement si necessaire des donnees recuperees
;

// appel du script de vue qui permet de gerer l'affichage des donnees
$titre = "Liste des salles répertoriées";
include "$racine/vue/entete.html.php";
include "$racine/vue/vueListeSalles.php";
include "$racine/vue/pied.html.php";
?>