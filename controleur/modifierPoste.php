<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}
include_once "$racine/modele/bd.salle.inc.php";
$verif = false;
// appel des fonctions permettant de recuperer les donnees utiles a l'affichage 
$listeSalle = getSalles();
$listePoste = getPostes();
$listeType = getTypes();

// traitement si necessaire des donnees recuperees
if (isset($_POST["numPoste"]) && isset($_POST["nomPoste"]) && isset($_POST["typePoste"]) && isset($_POST["numSalle"])) {
    $_POST["nomPoste"] =  trim($_POST["nomPoste"], " ");
    if($_POST["nomPoste"] != "" && $_POST["nomPoste"] != " ") {
        $verif = updatePoste($_POST["nomPoste"], $_POST["typePoste"], $_POST["numSalle"], $_POST["numPoste"]);
    }
};
// appel du script de vue qui permet de gerer l'affichage des donnees
$titre = "Modifier des postes";
include "$racine/vue/entete.html.php";
include "$racine/vue/vueModifierPoste.php";
if ($verif){ ?>
    <hr><br/>
    <div class="alert alert-success" role="alert">
        Poste bien modifier !
    </div> <?php
}
include "$racine/vue/pied.html.php";
?>