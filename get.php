<?php 
    require_once("connexion.php");
    require("querry copy.php");
    print_r($_GET);

    if(isset($_GET['selectcontinent'])){
        $selector = $_GET['selectcontinent'];
                $datastatement = $dbh->prepare($querryallregion);
                $datastatement->execute(["id"=>$selector]);
                $affselectcont = $datastatement->fetchAll();
        }




