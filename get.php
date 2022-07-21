<?php 
    require_once("connexion.php");
    require("querry.php");
    print_r($_GET);

    if(isset($_GET['selectcontinent'])){
        $selector = $_GET['selectcontinent'];
        switch ($selector){
            case 1:
                $datastatement = $dbh->prepare($querryallregionaf);
                $datastatement->execute();
                $affselectcont = $datastatement->fetchAll();
                header("Location: http://tableaupays/index.php?selectorcontinent=1");
                break;
            case 2:
                $datastatement = $dbh->prepare($querryallregionalc);
                $datastatement->execute();
                $affselectcont = $datastatement->fetchAll();
                header("Location: http://tableaupays/index.php?selectorcontinent=2");
                break;
            case 3:
                $datastatement = $dbh->prepare($querryallpaysase);
                $datastatement->execute();
                $affselectcont = $datastatement->fetchAll();
                header("Location: http://tableaupays/index.php?selectorcontinent=3");
                break;
            case 4:
                $datastatement = $dbh->prepare($querryallregionasi);
                $datastatement->execute();
                $affselectcont = $datastatement->fetchAll();
                header("Location: http://tableaupays/index.php?selectorcontinent=4");
                break;
            case 5:
                $datastatement = $dbh->prepare($querryallregioneu);
                $datastatement->execute();
                $affselectcont = $datastatement->fetchAll();
                header("Location: http://tableaupays/index.php?selectorcontinent=5");
                break;
            case 6:
                $datastatement = $dbh->prepare($querryallregionoc);
                $datastatement->execute();
                $affselectcont = $datastatement->fetchAll();
                header("Location: http://tableaupays/index.php?selectorcontinent=6");
                break;
            default:
                $datastatement = $dbh->prepare($querryallcontinent);
                $datastatement->execute();
                $affselectcont = $datastatement->fetchAll();
                header("Location: http://tableaupays/index.php?selectorcontinent=");
                break;
        }
    }




