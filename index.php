<?php
require_once("connexion.php");
require("querry.php");

$datastatement = $dbh->prepare($querrydisplaycontinent);
$datastatement->execute();
$affselectcont = $datastatement->fetchAll();

$datastatement = $dbh->prepare($querryworldwide);
$datastatement->execute();
$dataglobale = $datastatement->fetchAll();

if (!isset($_GET['selectorcontinent']) || $_GET['selectorcontinent'] == '') {
    $datastatement = $dbh->prepare($querrypercontinent);
    $datastatement->execute();
    $datamultiple = $datastatement->fetchAll();
} else if (isset($_GET['selectorcontinent'])){
    $datastatement = $dbh->prepare($querrydisplayregion);
    $datastatement->execute(["id"=>$_GET['selectorcontinent']]);
    $affselectreg = $datastatement->fetchAll();

    $datastatement = $dbh->prepare($querryallregion);
    $datastatement->execute(["id"=>$_GET['selectorcontinent']]);
    $datamultiple = $datastatement->fetchAll();

    if ($_GET['selectorcontinent'] == 3){
        $datastatement = $dbh->prepare($querryallpaysase);
        $datastatement->execute(["id"=>$_GET['selectorcontinent']]);
        $datamultiple = $datastatement->fetchAll();
    } else if (isset($_GET['selectorregion']) && !$_GET['selectorregion'] == ''){
        $datastatement = $dbh->prepare($querryallpays);
        $datastatement->execute(["id"=>$_GET['selectorregion']]);
        $datamultiple = $datastatement->fetchAll();
    }

}


?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="assets/script/app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/style/style.css">
    <title>Base de Données des Pays</title>
</head>

<body>
    <header class="container">
        <div class="row menu">
            <h1 class="text-center mt-5">Population Mondiale 2019</h1>
            <form action="/" method="get" class="row menu d-flex align-items-end justify-content-center mb-5 form-dark">
                <div class='form-group formulaire w-25 '>
                    <label for="selectorcontinent">Par continent</label>
                    <select class="form-control bg-dark text-white" id="selectorcontinent" name="selectorcontinent" onchange="this.form.submit()">
                        <option value="">Monde</option>
                        <?php foreach ($affselectcont as $cont) : ?>
                            <?php if ($cont['ContID'] == $_GET['selectorcontinent']) : ?>
                                <?= "<option selected value=" . $cont['ContID'] . ">" .  $cont['ContName'] . "</option>" ?>
                            <?php else : ?>
                                <?= "<option value=" . $cont['ContID'] . ">" .  $cont['ContName'] . "</option>" ?>
                            <?php endif; ?>
                        <?php endforeach ?>
                    </select>
                </div>
                <div class='form-group formulaire w-25'>
                    <label for="selectorregion">Par region</label>
                    <select class="form-control bg-dark text-white" id="selectorregion" name="selectorregion" onchange="this.form.submit()">
                    <option value="">Aucun</option>
                        <?php foreach ($affselectreg as $reg) : ?>
                                <?php if ($reg['RegID'] == $_GET['selectorregion']) : ?>
                                    <?= "<option selected value=" . $reg['RegID'] . ">" .  $reg['RegName'] . "</option>" ?>
                                <?php else : ?>
                                    <?= "<option value=" . $reg['RegID'] . ">" .  $reg['RegName'] . "</option>" ?>
                                <?php endif; ?>
                        <?php endforeach ?>
                    </select>
                </div>
            </form>

        </div>
        </div>
    </header>
    <main>
        <div class="container data">
            <table class="table table-bordered table-striped table-dark">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Pays</th>
                        <th scope="col">Population totale <span class="info">(en milliers)</span></th>
                        <th scope="col">Taux de natalité</th>
                        <th scope="col">Taux de mortalité</th>
                        <th scope="col">Espérance de vie</th>
                        <th scope="col">Taux de mortalité infantile</th>
                        <th scope="col">Nombre d'enfant(s) par femme</th>
                        <th scope="col">Taux de croissance</th>
                        <th scope="col">Population de 65 ans et plus <span class="info">(en milliers)</span></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($datamultiple as $data) : ?>
                        <tr>
                            <td><?= $data['Nom'] ?></td>
                            <td><?= $data['PopulationTotale'] ?></td>
                            <td><?= round($data['TauxNatalite'], 1) ?></td>
                            <td><?= round($data['TauxMortalite'], 1) ?></td>
                            <td><?= round($data['EsperanceVie'], 1) ?></td>
                            <td><?= round($data['TauxMortaliteInfantile'], 1) ?></td>
                            <td><?= round($data['NombreEnfantFemme'], 1) ?></td>
                            <td><?= round($data['TauxCroissance'], 1) ?></td>
                            <td><?= $data['Population65Plus'] ?></td>
                        </tr>
                    <?php endforeach ?>
                    <?php foreach ($dataglobale as $data) : ?>
                        <tr>
                            <td>Monde</td>
                            <td><?= $data['PopulationTotale'] ?></td>
                            <td><?= round($data['TauxNatalite'], 1) ?></td>
                            <td><?= round($data['TauxMortalite'], 1) ?></td>
                            <td><?= round($data['EsperanceVie'], 1) ?></td>
                            <td><?= round($data['TauxMortaliteInfantile'], 1) ?></td>
                            <td><?= round($data['NombreEnfantFemme'], 1) ?></td>
                            <td><?= round($data['TauxCroissance'], 1) ?></td>
                            <td><?= $data['Population65Plus'] ?></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
                <tfoot>

                </tfoot>
            </table>
    </main>
</body>

</html>