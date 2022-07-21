<?php
    try{
        $dbh = new PDO('mysql:host=localhost:3308;dbname=pays;charset=utf8','root','BrokenButterfly');
    }
    catch(PDOException $e){
        print "Erreur!: " . $e->getMessage() . "<br/>";
        die();
    }
?>