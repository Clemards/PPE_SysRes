<?php
include_once "bd.inc.php";

if (isset($_POST["numPoste"],$_POST["numSalle"],$_POST["nomPoste"],$_POST["typePoste"]) && $_POST["nomPoste"]!=" " && $_POST["nomPoste"]!="") {
    try {
        $cnx = connexionMRBS();

        $req = $cnx->prepare("update Poste
            SET nomPoste = :nomP
            indIP = (SELECT indIP from Salle WHERE nSalle = :numS)
            ad = (SELECT poste.indIP, MAX(ad+1) FROM poste GROUP BY poste.indIP)
            typePoste = :typeP
            nSalle = :numS
            WHERE numPoste = :numP");
        $req->bindValue(':nomP', $_POST["nomPoste"]);
        $req->bindValue(':typeP', $_POST["typePoste"]);
        $req->bindValue(':numS', $_POST["numSalle"]);
        $req->bindValue(':numP', $_POST["numPoste"]);
        
        $resultat = $req->execute();
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
}