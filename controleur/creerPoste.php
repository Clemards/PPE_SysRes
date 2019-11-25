<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}
include_once "$racine/modele/bd.salle.inc.php";

// appel à la fonction pour récupérer les salles
$listeSalle = getSalles();
$listeType = getTypes();

// appel du script de vue qui permet de gerer l'affichage des donnees
$titre = "Créer des postes";
include "$racine/vue/entete.html.php";
include "$racine/vue/vueCreerPoste.php";
include "$racine/vue/pied.html.php";
?>