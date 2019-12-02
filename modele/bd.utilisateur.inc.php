<?php

include_once "bd.inc.php";

function getUtilisateurs() {
    try {
        $cnx = connexionMRBS();
        $req = $cnx->prepare("select * from mrbs_users");
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

function getUtilisateurByMailU($mailU) {
    try {
        $cnx = connexionMRBS();
        $req = $cnx->prepare("select * from mrbs_users where email=:mailU");
        $req->bindValue(':mailU', $mailU, PDO::PARAM_STR);
        $req->execute();
        
        $resultat = $req->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

function addUtilisateur($mailU, $mdpU, $pseudoU) {
    try {
        $cnx = connexionMRBS();

        $mdpUCrypt = crypt($mdpU, "sel");
        $req = $cnx->prepare("insert into mrbs_users (level, email, password, name) 
            values(:levelU, :mailU,:mdpU,:pseudoU)");
        $req->bindValue(':levelU', 0);
        $req->bindValue(':mailU', $mailU, PDO::PARAM_STR);
        $req->bindValue(':mdpU', $mdpUCrypt, PDO::PARAM_STR);
        $req->bindValue(':pseudoU', $pseudoU, PDO::PARAM_STR);
        
        $resultat = $req->execute();
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

function getLevelByMaiU($mailU){
    try {
        $cnx = connexionMRBS();

        $req = $cnx->prepare("select level from mrbs_users where email=:mailU");
        $req->bindValue(':mailU', $mailU, PDO::PARAM_STR);
        $req->execute();
        
        $resultat = $req->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
    // prog principal de test
    header('Content-Type:text/plain');

    echo "getUtilisateurs() : \n";
    print_r(getUtilisateurs());

    echo "getUtilisateurByMailU(\"mathieu.capliez@gmail.com\") : \n";
    print_r(getUtilisateurByMailU("mathieu.capliez@gmail.com"));

    echo "addUtilisateur('mathieu.capliez3@gmail.com', 'azerty', 'mat') : \n";
    addUtilisateur("mathieu.capliez3@gmail.com", "azerty", "mat");
}
?>