<?php

// Affichage des continent
$querrydisplaycontinent = 'SELECT t_continents.id_continent AS ContID, 
t_continents.libelle_continent AS ContName 
FROM t_continents;';

// Affichage des regions
$querrydisplayregion = 'SELECT t_regions.id_region AS RegID,
t_regions.libelle_region AS RegName
FROM t_regions
INNER JOIN t_continents ON (t_continents.id_continent = t_regions.continent_id)
WHERE t_continents.id_continent = :id
GROUP BY t_regions.id_region;';

// CONTINENTS
// Tout les continent 
$querrypercontinent = 'SELECT t_continents.libelle_continent AS Nom, 
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
$querryallregion = 'SELECT t_regions.libelle_region AS Nom, 
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
WHERE t_continents.id_continent = :id
GROUP BY t_regions.id_region;';


// PAYS
$querryallpays = 'SELECT t_pays.libelle_pays AS Nom, 
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
WHERE t_regions.id_region = :id
GROUP BY t_pays.id_pays;';

// Les pays de l'Amérique Septentrionale
$querryallpaysase = 'SELECT t_pays.libelle_pays AS Nom, 
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
WHERE t_continents.id_continent = :id
GROUP BY t_pays.id_pays;';