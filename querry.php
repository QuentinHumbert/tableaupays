<?php

// Affichage des continent
$querryallcontinent = 'SELECT t_continents.id_continent AS ContID, 
t_continents.libelle_continent AS ContName 
FROM t_continents;';

// Affichage des regions
$querryallregion = '';

// CONTINENTS
// Tout les continent 
$querrypercontinent = 'SELECT t_continents.libelle_continent AS Continent, 
SUM(t_pays.population_pays) AS PopulationTotale, 
AVG(t_pays.taux_natalite_pays) AS TauxNatalite, 
AVG(t_pays.taux_mortalite_pays) AS TauxMortalite, 
AVG(t_pays.esperance_vie_pays) AS EsperanceVie, 
AVG(t_pays.taux_mortalite_infantile_pays) AS TauxMortaliteInfantile, 
AVG(t_pays.nombre_enfants_par_femme_pays) AS NombreEnfantFemme, 
AVG(t_pays.taux_croissance_pays) AS TauxCroissance, 
SUM(t_pays.population_plus_65_pays) AS Population65Plus 
FROM t_pays 
INNER JOIN t_continents ON (t_continents.id_continent = t_pays.continent_id) 
GROUP BY t_continents.id_continent;';

// Le monde
$querryworldwide = 'SELECT SUM(t_pays.population_pays) AS PopulationTotale, 
AVG(t_pays.taux_natalite_pays) AS TauxNatalite, 
AVG(t_pays.taux_mortalite_pays) AS TauxMortalite, 
AVG(t_pays.esperance_vie_pays) AS EsperanceVie, 
AVG(t_pays.taux_mortalite_infantile_pays) AS TauxMortaliteInfantile, 
AVG(t_pays.nombre_enfants_par_femme_pays) AS NombreEnfantFemme, 
AVG(t_pays.taux_croissance_pays) AS TauxCroissance, 
SUM(t_pays.population_plus_65_pays) AS Population65Plus 
FROM t_pays';

// REGIONS
// Les regions de l'Afrique
$querryallregionaf = 'SELECT t_regions.libelle_region AS Region, 
SUM(t_pays.population_pays) AS PopulationTotale, 
AVG(t_pays.taux_natalite_pays) AS TauxNatalite, 
AVG(t_pays.taux_mortalite_pays) AS TauxMortalite, 
AVG(t_pays.esperance_vie_pays) AS EsperanceVie, 
AVG(t_pays.taux_mortalite_infantile_pays) AS TauxMortaliteInfantile, 
AVG(t_pays.nombre_enfants_par_femme_pays) AS NombreEnfantFemme, 
AVG(t_pays.taux_croissance_pays) AS TauxCroissance, 
SUM(t_pays.population_plus_65_pays) AS Population65Plus 
FROM t_pays 
INNER JOIN t_regions ON (t_regions.id_region = t_pays.region_id)
INNER JOIN t_continents ON (t_continents.id_continent = t_regions.continent_id)
WHERE t_continents.libelle_continent = "Afrique"
GROUP BY t_regions.id_region;';

// Les regions de l'Amérique Latine et Caraïbes
$querryallregionalc = 'SELECT t_regions.libelle_region AS Region, 
SUM(t_pays.population_pays) AS PopulationTotale, 
AVG(t_pays.taux_natalite_pays) AS TauxNatalite, 
AVG(t_pays.taux_mortalite_pays) AS TauxMortalite, 
AVG(t_pays.esperance_vie_pays) AS EsperanceVie, 
AVG(t_pays.taux_mortalite_infantile_pays) AS TauxMortaliteInfantile, 
AVG(t_pays.nombre_enfants_par_femme_pays) AS NombreEnfantFemme, 
AVG(t_pays.taux_croissance_pays) AS TauxCroissance, 
SUM(t_pays.population_plus_65_pays) AS Population65Plus 
FROM t_pays 
INNER JOIN t_regions ON (t_regions.id_region = t_pays.region_id)
INNER JOIN t_continents ON (t_continents.id_continent = t_regions.continent_id)
WHERE t_continents.libelle_continent = "Amérique Latine et Caraïbes"
GROUP BY t_regions.id_region;';

// Les regions de l'Asie
$querryallregionasi = 'SELECT t_regions.libelle_region AS Region, 
SUM(t_pays.population_pays) AS PopulationTotale, 
AVG(t_pays.taux_natalite_pays) AS TauxNatalite, 
AVG(t_pays.taux_mortalite_pays) AS TauxMortalite, 
AVG(t_pays.esperance_vie_pays) AS EsperanceVie, 
AVG(t_pays.taux_mortalite_infantile_pays) AS TauxMortaliteInfantile, 
AVG(t_pays.nombre_enfants_par_femme_pays) AS NombreEnfantFemme, 
AVG(t_pays.taux_croissance_pays) AS TauxCroissance, 
SUM(t_pays.population_plus_65_pays) AS Population65Plus 
FROM t_pays 
INNER JOIN t_regions ON (t_regions.id_region = t_pays.region_id)
INNER JOIN t_continents ON (t_continents.id_continent = t_regions.continent_id)
WHERE t_continents.libelle_continent = "Asie"
GROUP BY t_regions.id_region;';

// Les regions de l'Europe
$querryallregioneu = 'SELECT t_regions.libelle_region AS Region, 
SUM(t_pays.population_pays) AS PopulationTotale, 
AVG(t_pays.taux_natalite_pays) AS TauxNatalite, 
AVG(t_pays.taux_mortalite_pays) AS TauxMortalite, 
AVG(t_pays.esperance_vie_pays) AS EsperanceVie, 
AVG(t_pays.taux_mortalite_infantile_pays) AS TauxMortaliteInfantile, 
AVG(t_pays.nombre_enfants_par_femme_pays) AS NombreEnfantFemme, 
AVG(t_pays.taux_croissance_pays) AS TauxCroissance, 
SUM(t_pays.population_plus_65_pays) AS Population65Plus 
FROM t_pays 
INNER JOIN t_regions ON (t_regions.id_region = t_pays.region_id)
INNER JOIN t_continents ON (t_continents.id_continent = t_regions.continent_id)
WHERE t_continents.libelle_continent = "Europe"
GROUP BY t_regions.id_region;';

// Les regions de l'Océanie
$querryallregionoc = 'SELECT t_regions.libelle_region AS Region, 
SUM(t_pays.population_pays) AS PopulationTotale, 
AVG(t_pays.taux_natalite_pays) AS TauxNatalite, 
AVG(t_pays.taux_mortalite_pays) AS TauxMortalite, 
AVG(t_pays.esperance_vie_pays) AS EsperanceVie, 
AVG(t_pays.taux_mortalite_infantile_pays) AS TauxMortaliteInfantile, 
AVG(t_pays.nombre_enfants_par_femme_pays) AS NombreEnfantFemme, 
AVG(t_pays.taux_croissance_pays) AS TauxCroissance, 
SUM(t_pays.population_plus_65_pays) AS Population65Plus 
FROM t_pays 
INNER JOIN t_regions ON (t_regions.id_region = t_pays.region_id)
INNER JOIN t_continents ON (t_continents.id_continent = t_regions.continent_id)
WHERE t_continents.libelle_continent = "Océanie"
GROUP BY t_regions.id_region;';

// PAYS
// Les pays de l'Afrique Centrale
$querryallpaysafc = 'SELECT t_pays.libelle_pays AS Pays, 
SUM(t_pays.population_pays) AS PopulationTotale, 
AVG(t_pays.taux_natalite_pays) AS TauxNatalite, 
AVG(t_pays.taux_mortalite_pays) AS TauxMortalite, 
AVG(t_pays.esperance_vie_pays) AS EsperanceVie, 
AVG(t_pays.taux_mortalite_infantile_pays) AS TauxMortaliteInfantile, 
AVG(t_pays.nombre_enfants_par_femme_pays) AS NombreEnfantFemme, 
AVG(t_pays.taux_croissance_pays) AS TauxCroissance, 
SUM(t_pays.population_plus_65_pays) AS Population65Plus 
FROM t_pays 
INNER JOIN t_regions ON (t_regions.id_region = t_pays.region_id)
WHERE t_regions.libelle_region = "Afrique Centrale"
GROUP BY t_pays.id_pays;';

// Les pays de l'Afrique Orientale
$querryallpaysafor = 'SELECT t_pays.libelle_pays AS Pays, 
SUM(t_pays.population_pays) AS PopulationTotale, 
AVG(t_pays.taux_natalite_pays) AS TauxNatalite, 
AVG(t_pays.taux_mortalite_pays) AS TauxMortalite, 
AVG(t_pays.esperance_vie_pays) AS EsperanceVie, 
AVG(t_pays.taux_mortalite_infantile_pays) AS TauxMortaliteInfantile, 
AVG(t_pays.nombre_enfants_par_femme_pays) AS NombreEnfantFemme, 
AVG(t_pays.taux_croissance_pays) AS TauxCroissance, 
SUM(t_pays.population_plus_65_pays) AS Population65Plus 
FROM t_pays 
INNER JOIN t_regions ON (t_regions.id_region = t_pays.region_id)
WHERE t_regions.libelle_region = "Afrique Orientale"
GROUP BY t_pays.id_pays;';

// Les pays de l'Afrique Septentrionale
$querryallpaysafs = 'SELECT t_pays.libelle_pays AS Pays, 
SUM(t_pays.population_pays) AS PopulationTotale, 
AVG(t_pays.taux_natalite_pays) AS TauxNatalite, 
AVG(t_pays.taux_mortalite_pays) AS TauxMortalite, 
AVG(t_pays.esperance_vie_pays) AS EsperanceVie, 
AVG(t_pays.taux_mortalite_infantile_pays) AS TauxMortaliteInfantile, 
AVG(t_pays.nombre_enfants_par_femme_pays) AS NombreEnfantFemme, 
AVG(t_pays.taux_croissance_pays) AS TauxCroissance, 
SUM(t_pays.population_plus_65_pays) AS Population65Plus 
FROM t_pays 
INNER JOIN t_regions ON (t_regions.id_region = t_pays.region_id)
WHERE t_regions.libelle_region = "Afrique Septentrionale"
GROUP BY t_pays.id_pays;';

// Les pays de l'Afrique australe
$querryallpaysafa = 'SELECT t_pays.libelle_pays AS Pays, 
SUM(t_pays.population_pays) AS PopulationTotale, 
AVG(t_pays.taux_natalite_pays) AS TauxNatalite, 
AVG(t_pays.taux_mortalite_pays) AS TauxMortalite, 
AVG(t_pays.esperance_vie_pays) AS EsperanceVie, 
AVG(t_pays.taux_mortalite_infantile_pays) AS TauxMortaliteInfantile, 
AVG(t_pays.nombre_enfants_par_femme_pays) AS NombreEnfantFemme, 
AVG(t_pays.taux_croissance_pays) AS TauxCroissance, 
SUM(t_pays.population_plus_65_pays) AS Population65Plus 
FROM t_pays 
INNER JOIN t_regions ON (t_regions.id_region = t_pays.region_id)
WHERE t_regions.libelle_region = "Afrique australe"
GROUP BY t_pays.id_pays;';

// Les pays de l'Afrique occidentale
$querryallpaysafoc = 'SELECT t_pays.libelle_pays AS Pays, 
SUM(t_pays.population_pays) AS PopulationTotale, 
AVG(t_pays.taux_natalite_pays) AS TauxNatalite, 
AVG(t_pays.taux_mortalite_pays) AS TauxMortalite, 
AVG(t_pays.esperance_vie_pays) AS EsperanceVie, 
AVG(t_pays.taux_mortalite_infantile_pays) AS TauxMortaliteInfantile, 
AVG(t_pays.nombre_enfants_par_femme_pays) AS NombreEnfantFemme, 
AVG(t_pays.taux_croissance_pays) AS TauxCroissance, 
SUM(t_pays.population_plus_65_pays) AS Population65Plus 
FROM t_pays 
INNER JOIN t_regions ON (t_regions.id_region = t_pays.region_id)
WHERE t_regions.libelle_region = "Afrique occidentale"
GROUP BY t_pays.id_pays;';

// Les pays de l'Amérique centrale
$querryallpaysamc = 'SELECT t_pays.libelle_pays AS Pays, 
SUM(t_pays.population_pays) AS PopulationTotale, 
AVG(t_pays.taux_natalite_pays) AS TauxNatalite, 
AVG(t_pays.taux_mortalite_pays) AS TauxMortalite, 
AVG(t_pays.esperance_vie_pays) AS EsperanceVie, 
AVG(t_pays.taux_mortalite_infantile_pays) AS TauxMortaliteInfantile, 
AVG(t_pays.nombre_enfants_par_femme_pays) AS NombreEnfantFemme, 
AVG(t_pays.taux_croissance_pays) AS TauxCroissance, 
SUM(t_pays.population_plus_65_pays) AS Population65Plus 
FROM t_pays 
INNER JOIN t_regions ON (t_regions.id_region = t_pays.region_id)
WHERE t_regions.libelle_region = "Afrique centrale"
GROUP BY t_pays.id_pays;';

// Les pays de l'Amérique du Sud
$querryallpaysams = 'SELECT t_pays.libelle_pays AS Pays, 
SUM(t_pays.population_pays) AS PopulationTotale, 
AVG(t_pays.taux_natalite_pays) AS TauxNatalite, 
AVG(t_pays.taux_mortalite_pays) AS TauxMortalite, 
AVG(t_pays.esperance_vie_pays) AS EsperanceVie, 
AVG(t_pays.taux_mortalite_infantile_pays) AS TauxMortaliteInfantile, 
AVG(t_pays.nombre_enfants_par_femme_pays) AS NombreEnfantFemme, 
AVG(t_pays.taux_croissance_pays) AS TauxCroissance, 
SUM(t_pays.population_plus_65_pays) AS Population65Plus 
FROM t_pays 
INNER JOIN t_regions ON (t_regions.id_region = t_pays.region_id)
WHERE t_regions.libelle_region = "Amérique du Sud"
GROUP BY t_pays.id_pays;';

// Les pays de l'Asie de l'Est
$querryallpaysase = 'SELECT t_pays.libelle_pays AS Pays, 
SUM(t_pays.population_pays) AS PopulationTotale, 
AVG(t_pays.taux_natalite_pays) AS TauxNatalite, 
AVG(t_pays.taux_mortalite_pays) AS TauxMortalite, 
AVG(t_pays.esperance_vie_pays) AS EsperanceVie, 
AVG(t_pays.taux_mortalite_infantile_pays) AS TauxMortaliteInfantile, 
AVG(t_pays.nombre_enfants_par_femme_pays) AS NombreEnfantFemme, 
AVG(t_pays.taux_croissance_pays) AS TauxCroissance, 
SUM(t_pays.population_plus_65_pays) AS Population65Plus 
FROM t_pays 
INNER JOIN t_regions ON (t_regions.id_region = t_pays.region_id)
WHERE t_regions.libelle_region = "Asie de l\'Est"
GROUP BY t_pays.id_pays;';

// Les pays de l'Asie de l'Ouest
$querryallpaysaso = 'SELECT t_pays.libelle_pays AS Pays, 
SUM(t_pays.population_pays) AS PopulationTotale, 
AVG(t_pays.taux_natalite_pays) AS TauxNatalite, 
AVG(t_pays.taux_mortalite_pays) AS TauxMortalite, 
AVG(t_pays.esperance_vie_pays) AS EsperanceVie, 
AVG(t_pays.taux_mortalite_infantile_pays) AS TauxMortaliteInfantile, 
AVG(t_pays.nombre_enfants_par_femme_pays) AS NombreEnfantFemme, 
AVG(t_pays.taux_croissance_pays) AS TauxCroissance, 
SUM(t_pays.population_plus_65_pays) AS Population65Plus 
FROM t_pays 
INNER JOIN t_regions ON (t_regions.id_region = t_pays.region_id)
WHERE t_regions.libelle_region = "Asie de l\'Ouest"
GROUP BY t_pays.id_pays;';

// Les pays de l'Asie du Centre et du Sud
$querryallpaysascs = 'SELECT t_pays.libelle_pays AS Pays, 
SUM(t_pays.population_pays) AS PopulationTotale, 
AVG(t_pays.taux_natalite_pays) AS TauxNatalite, 
AVG(t_pays.taux_mortalite_pays) AS TauxMortalite, 
AVG(t_pays.esperance_vie_pays) AS EsperanceVie, 
AVG(t_pays.taux_mortalite_infantile_pays) AS TauxMortaliteInfantile, 
AVG(t_pays.nombre_enfants_par_femme_pays) AS NombreEnfantFemme, 
AVG(t_pays.taux_croissance_pays) AS TauxCroissance, 
SUM(t_pays.population_plus_65_pays) AS Population65Plus 
FROM t_pays 
INNER JOIN t_regions ON (t_regions.id_region = t_pays.region_id)
WHERE t_regions.libelle_region = "Asie du Centre et du Sud"
GROUP BY t_pays.id_pays;';

// Les pays de l'Asie du Sud-Est
$querryallpaysasse = 'SELECT t_pays.libelle_pays AS Pays, 
SUM(t_pays.population_pays) AS PopulationTotale, 
AVG(t_pays.taux_natalite_pays) AS TauxNatalite, 
AVG(t_pays.taux_mortalite_pays) AS TauxMortalite, 
AVG(t_pays.esperance_vie_pays) AS EsperanceVie, 
AVG(t_pays.taux_mortalite_infantile_pays) AS TauxMortaliteInfantile, 
AVG(t_pays.nombre_enfants_par_femme_pays) AS NombreEnfantFemme, 
AVG(t_pays.taux_croissance_pays) AS TauxCroissance, 
SUM(t_pays.population_plus_65_pays) AS Population65Plus 
FROM t_pays 
INNER JOIN t_regions ON (t_regions.id_region = t_pays.region_id)
WHERE t_regions.libelle_region = "Asie du Sud-Est"
GROUP BY t_pays.id_pays;';

// Les pays de l'Australie Nouvelle Zélande
$querryallpaysanz = 'SELECT t_pays.libelle_pays AS Pays, 
SUM(t_pays.population_pays) AS PopulationTotale, 
AVG(t_pays.taux_natalite_pays) AS TauxNatalite, 
AVG(t_pays.taux_mortalite_pays) AS TauxMortalite, 
AVG(t_pays.esperance_vie_pays) AS EsperanceVie, 
AVG(t_pays.taux_mortalite_infantile_pays) AS TauxMortaliteInfantile, 
AVG(t_pays.nombre_enfants_par_femme_pays) AS NombreEnfantFemme, 
AVG(t_pays.taux_croissance_pays) AS TauxCroissance, 
SUM(t_pays.population_plus_65_pays) AS Population65Plus 
FROM t_pays 
INNER JOIN t_regions ON (t_regions.id_region = t_pays.region_id)
WHERE t_regions.libelle_region = "Australie Nouvelle Zélande"
GROUP BY t_pays.id_pays;';

// Les pays des Caraïbes
$querryallpaysca = 'SELECT t_pays.libelle_pays AS Pays, 
SUM(t_pays.population_pays) AS PopulationTotale, 
AVG(t_pays.taux_natalite_pays) AS TauxNatalite, 
AVG(t_pays.taux_mortalite_pays) AS TauxMortalite, 
AVG(t_pays.esperance_vie_pays) AS EsperanceVie, 
AVG(t_pays.taux_mortalite_infantile_pays) AS TauxMortaliteInfantile, 
AVG(t_pays.nombre_enfants_par_femme_pays) AS NombreEnfantFemme, 
AVG(t_pays.taux_croissance_pays) AS TauxCroissance, 
SUM(t_pays.population_plus_65_pays) AS Population65Plus 
FROM t_pays 
INNER JOIN t_regions ON (t_regions.id_region = t_pays.region_id)
WHERE t_regions.libelle_region = "Caraïbes"
GROUP BY t_pays.id_pays;';

// Les pays de l'Europe de l'Est
$querryallpaysee = 'SELECT t_pays.libelle_pays AS Pays, 
SUM(t_pays.population_pays) AS PopulationTotale, 
AVG(t_pays.taux_natalite_pays) AS TauxNatalite, 
AVG(t_pays.taux_mortalite_pays) AS TauxMortalite, 
AVG(t_pays.esperance_vie_pays) AS EsperanceVie, 
AVG(t_pays.taux_mortalite_infantile_pays) AS TauxMortaliteInfantile, 
AVG(t_pays.nombre_enfants_par_femme_pays) AS NombreEnfantFemme, 
AVG(t_pays.taux_croissance_pays) AS TauxCroissance, 
SUM(t_pays.population_plus_65_pays) AS Population65Plus 
FROM t_pays 
INNER JOIN t_regions ON (t_regions.id_region = t_pays.region_id)
WHERE t_regions.libelle_region = "Europe de l\'Est"
GROUP BY t_pays.id_pays;';

// Les pays de l'Europe de l'Ouest
$querryallpayseo = 'SELECT t_pays.libelle_pays AS Pays, 
SUM(t_pays.population_pays) AS PopulationTotale, 
AVG(t_pays.taux_natalite_pays) AS TauxNatalite, 
AVG(t_pays.taux_mortalite_pays) AS TauxMortalite, 
AVG(t_pays.esperance_vie_pays) AS EsperanceVie, 
AVG(t_pays.taux_mortalite_infantile_pays) AS TauxMortaliteInfantile, 
AVG(t_pays.nombre_enfants_par_femme_pays) AS NombreEnfantFemme, 
AVG(t_pays.taux_croissance_pays) AS TauxCroissance, 
SUM(t_pays.population_plus_65_pays) AS Population65Plus 
FROM t_pays 
INNER JOIN t_regions ON (t_regions.id_region = t_pays.region_id)
WHERE t_regions.libelle_region = "Europe de l\'Ouest"
GROUP BY t_pays.id_pays;';

// Les pays de l'Europe du Nord
$querryallpaysen = 'SELECT t_pays.libelle_pays AS Pays, 
SUM(t_pays.population_pays) AS PopulationTotale, 
AVG(t_pays.taux_natalite_pays) AS TauxNatalite, 
AVG(t_pays.taux_mortalite_pays) AS TauxMortalite, 
AVG(t_pays.esperance_vie_pays) AS EsperanceVie, 
AVG(t_pays.taux_mortalite_infantile_pays) AS TauxMortaliteInfantile, 
AVG(t_pays.nombre_enfants_par_femme_pays) AS NombreEnfantFemme, 
AVG(t_pays.taux_croissance_pays) AS TauxCroissance, 
SUM(t_pays.population_plus_65_pays) AS Population65Plus 
FROM t_pays 
INNER JOIN t_regions ON (t_regions.id_region = t_pays.region_id)
WHERE t_regions.libelle_region = "Europe du Nord"
GROUP BY t_pays.id_pays;';

// Les pays de l'Europe du Sud
$querryallpayses = 'SELECT t_pays.libelle_pays AS Pays, 
SUM(t_pays.population_pays) AS PopulationTotale, 
AVG(t_pays.taux_natalite_pays) AS TauxNatalite, 
AVG(t_pays.taux_mortalite_pays) AS TauxMortalite, 
AVG(t_pays.esperance_vie_pays) AS EsperanceVie, 
AVG(t_pays.taux_mortalite_infantile_pays) AS TauxMortaliteInfantile, 
AVG(t_pays.nombre_enfants_par_femme_pays) AS NombreEnfantFemme, 
AVG(t_pays.taux_croissance_pays) AS TauxCroissance, 
SUM(t_pays.population_plus_65_pays) AS Population65Plus 
FROM t_pays 
INNER JOIN t_regions ON (t_regions.id_region = t_pays.region_id)
WHERE t_regions.libelle_region = "Europe du Sud"
GROUP BY t_pays.id_pays;';

// Les pays de la Micronésie
$querryallpaysmc = 'SELECT t_pays.libelle_pays AS Pays, 
SUM(t_pays.population_pays) AS PopulationTotale, 
AVG(t_pays.taux_natalite_pays) AS TauxNatalite, 
AVG(t_pays.taux_mortalite_pays) AS TauxMortalite, 
AVG(t_pays.esperance_vie_pays) AS EsperanceVie, 
AVG(t_pays.taux_mortalite_infantile_pays) AS TauxMortaliteInfantile, 
AVG(t_pays.nombre_enfants_par_femme_pays) AS NombreEnfantFemme, 
AVG(t_pays.taux_croissance_pays) AS TauxCroissance, 
SUM(t_pays.population_plus_65_pays) AS Population65Plus 
FROM t_pays 
INNER JOIN t_regions ON (t_regions.id_region = t_pays.region_id)
WHERE t_regions.libelle_region = "Micronésie"
GROUP BY t_pays.id_pays;';

// Les pays de la Mélanésie
$querryallpaysml = 'SELECT t_pays.libelle_pays AS Pays, 
SUM(t_pays.population_pays) AS PopulationTotale, 
AVG(t_pays.taux_natalite_pays) AS TauxNatalite, 
AVG(t_pays.taux_mortalite_pays) AS TauxMortalite, 
AVG(t_pays.esperance_vie_pays) AS EsperanceVie, 
AVG(t_pays.taux_mortalite_infantile_pays) AS TauxMortaliteInfantile, 
AVG(t_pays.nombre_enfants_par_femme_pays) AS NombreEnfantFemme, 
AVG(t_pays.taux_croissance_pays) AS TauxCroissance, 
SUM(t_pays.population_plus_65_pays) AS Population65Plus 
FROM t_pays 
INNER JOIN t_regions ON (t_regions.id_region = t_pays.region_id)
WHERE t_regions.libelle_region = "Mélanésie"
GROUP BY t_pays.id_pays;';

// Les pays de la Polynésie
$querryallpayspl = 'SELECT t_pays.libelle_pays AS Pays, 
SUM(t_pays.population_pays) AS PopulationTotale, 
AVG(t_pays.taux_natalite_pays) AS TauxNatalite, 
AVG(t_pays.taux_mortalite_pays) AS TauxMortalite, 
AVG(t_pays.esperance_vie_pays) AS EsperanceVie, 
AVG(t_pays.taux_mortalite_infantile_pays) AS TauxMortaliteInfantile, 
AVG(t_pays.nombre_enfants_par_femme_pays) AS NombreEnfantFemme, 
AVG(t_pays.taux_croissance_pays) AS TauxCroissance, 
SUM(t_pays.population_plus_65_pays) AS Population65Plus 
FROM t_pays 
INNER JOIN t_regions ON (t_regions.id_region = t_pays.region_id)
WHERE t_regions.libelle_region = "Polynésie"
GROUP BY t_pays.id_pays;';

// Les pays de l'Amérique Septentrionale
$querryallpaysase = 'SELECT t_pays.libelle_pays AS Pays, 
SUM(t_pays.population_pays) AS PopulationTotale, 
AVG(t_pays.taux_natalite_pays) AS TauxNatalite, 
AVG(t_pays.taux_mortalite_pays) AS TauxMortalite, 
AVG(t_pays.esperance_vie_pays) AS EsperanceVie, 
AVG(t_pays.taux_mortalite_infantile_pays) AS TauxMortaliteInfantile, 
AVG(t_pays.nombre_enfants_par_femme_pays) AS NombreEnfantFemme, 
AVG(t_pays.taux_croissance_pays) AS TauxCroissance, 
SUM(t_pays.population_plus_65_pays) AS Population65Plus 
FROM t_pays 
INNER JOIN t_continents ON (t_continents.id_continent = t_pays.continent_id)
WHERE t_continents.libelle_continent = "Amérique Septentrionale"
GROUP BY t_pays.id_pays;';