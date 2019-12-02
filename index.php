<!-- Copyright Clément Arlandis, 2019 -->
<?php
  include "getRacine.php";
  include "$racine/controleur/controleurPrincipal.php";
 
  if (isset($_GET["action"])) {
    $action = $_GET["action"];
  }
  else {
    if(isset($_SESSION)){
        $action = "accueil";
    } else {
        $action = "connexion";
    }
}
  $fichier = controleurPrincipal($action);
  include "$racine/controleur/$fichier";
  ?>
