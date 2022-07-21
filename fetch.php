<?php
    require_once("connexion.php");
    require("querry.php");

    $datastatement = $dbh->prepare($querryallcontinent);
    $datastatement->execute();
    $affselectcont = $datastatement->fetchAll();

    $datastatement = $dbh->prepare($querryworldwide);
    $datastatement->execute();
    $dataglobale = $datastatement->fetchAll();

    if (isset($_GET)) {
        // Affichage des données par défaut
        $datastatement = $dbh->prepare($querrypercontinent);
        $datastatement->execute();
        $datamultiple = $datastatement->fetchAll();
    }
