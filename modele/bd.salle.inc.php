<?php

include_once "bd.inc.php";

function getSalleByIdS($idS) {
    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from Salle where nSalle=:idS");
        $req->bindValue(':idS', $idS, PDO::PARAM_INT);

        $req->execute();

        $resultat = $req->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

function getSalles() {
    $resultat = array();

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from Salle");
        $req->execute();

        $ligne = $req->fetch(PDO::FETCH_ASSOC);
        while ($ligne) {
            $resultat[] = $ligne;
            $ligne = $req->fetch(PDO::FETCH_ASSOC);
        }
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

function getPosteBySalle($Salle) {
    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from Poste where nSalle=:Salle");
        $req->bindValue(':Salle', $Salle, PDO::PARAM_INT);
        $req->execute();

        $ligne = $req->fetch(PDO::FETCH_ASSOC);
        $resultat = array();
        while ($ligne) {
            $resultat[] = $ligne;
            $ligne = $req->fetch(PDO::FETCH_ASSOC);
        }
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;    
}

function getPostes() {
    $resultat = array();

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from Poste");
        $req->execute();

        $ligne = $req->fetch(PDO::FETCH_ASSOC);
        while ($ligne) {
            $resultat[] = $ligne;
            $ligne = $req->fetch(PDO::FETCH_ASSOC);
        }
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

function getTypes() {
    $resultat = array();

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from Types");
        $req->execute();

        $ligne = $req->fetch(PDO::FETCH_ASSOC);
        while ($ligne) {
            $resultat[] = $ligne;
            $ligne = $req->fetch(PDO::FETCH_ASSOC);
        }
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}


function updatePoste($nomPoste, $typePoste, $numSalle, $numPoste) {
    try {
        $cnx = connexionPDO();
        $cnx = connexionPDO();
        $reqindIP = "SELECT indIP from Salle WHERE nSalle ='".$numSalle."';";
        $reqindIP = $cnx->query($reqindIP);
        $resindIP = $reqindIP->fetch();
        $resindIP = $resindIP['indIP'];

        /*$reqAd = $cnx->prepare("SELECT COUNT(*) as row, MAX(ad+1) as ad FROM poste INNER JOIN salle ON poste.nSalle = salle.nSalle
        WHERE salle.nSalle = :numS
        GROUP BY poste.indIP");
        $reqAd->bindValue(':numS', $_POST["numSalle"]);
        $resAd = $reqAd->execute();
        if ($resAd["row"] == 0) {
            $resAs["ad"] = 0;
        }*/

        $req = $cnx->prepare("UPDATE Poste
            SET nomPoste = :nomP,
            typePoste = :typeP,
            nSalle = :numS,
            indIP = :ip
            WHERE nPoste = :numP");
        $req->bindValue(':nomP', $nomPoste);
        $req->bindValue(':ip', $resindIP);
        //$req->bindValue(':ad', $resAd, PDO::PARAM_INT);
        $req->bindValue(':typeP',$typePoste);
        $req->bindValue(':numS', $numSalle);
        $req->bindValue(':numP', $numPoste);
        $resultat = $req->execute();
        return true;
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        return false;
        die();
    }
}

function createPoste($nomPoste, $typePoste, $numSalle, $numPoste) {
    try {
        $cnx = connexionPDO();
        $reqindIP = "SELECT indIP from Salle WHERE nSalle ='".$numSalle."';";
        $reqindIP = $cnx->query($reqindIP);
        $resindIP = $reqindIP->fetch();
        $resindIP = $resindIP['indIP'];

        $req = "INSERT  INTO Poste
            (nPoste, nomPoste, typePoste, nSalle, indIP)
            VALUES ('".$numPoste."', '".$nomPoste."', '".$typePoste."', '".$numSalle."' , '".$resindIP."');";
        $resultat = $cnx->query($req);
        return true;
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
        return false;
    }
}
?>