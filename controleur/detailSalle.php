<?php

if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
    $racine = "..";
}
include_once "$racine/modele/bd.salle.inc.php";

// creation du menu burger
$menuBurger = array();
$menuBurger[] = Array("url"=>"#poste","label"=>"Les postes");

// recuperation des donnees GET, POST, et SESSION
$idS = $_GET["idS"];

// appel des fonctions permettant de recuperer les donnees utiles a l'affichage 
$uneSalle = getSalleByIdS($idS);
$lesPoste = getPosteBySalle($idS);


// appel du script de vue qui permet de gerer l'affichage des donnees
$titre = "Detail d'une salle";
include "$racine/vue/entete.html.php";
include "$racine/vue/vueDetailSalle.php";
include "$racine/vue/pied.html.php";
?>