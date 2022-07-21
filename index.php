<?php
    require_once("fetch.php");

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
            <h1 class="text-center">Population Mondiale 2019</h1>
            <form action="get.php" method="get" class="row menu d-flex align-items-end justify-content-center mb-5">
                <div class='form-group formulaire w-25'>
                    <label for="selectorcontinent">Par continent</label>
                    <select class="form-control" id="selectorcontinent" name="selectorcontinent" onchange="changeContinent();">
                        <option value="">Monde</option>
                        <?php foreach ($affselectcont as $cont) : ?>
                            <?= "<option value=" . $cont['ContID'] . ">" .  $cont['ContName'] . "</option>" ?>
                        <?php endforeach ?>
                    </select>
                </div>
                <div class='form-group formulaire w-25'>
                    <label for="selectorregion">Par region</label>
                    <select class="form-control" id="selectorregion" name="selectorregion" onchange="changeRegion();">
                        <!-- <?php foreach ($affselectreg as $reg) : ?>
                            <?= "<option value=" . $reg['RegID'] . ">" .  $reg['RegName'] . "</option>" ?>
                        <?php endforeach ?> -->
                    </select>
                </div>
                <button class="btn btn-dark w-25 h-75" type="submit">Afficher</button>
            </form>

        </div>
        </div>
    </header>
    <main>
        <div class="container data">
            <table class="table table-bordered">
                <thead>
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
                            <td><?= $data['Continent'] ?></td>
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