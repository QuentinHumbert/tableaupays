<?php

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

$querryworldwide = 'SELECT SUM(t_pays.population_pays) AS PopulationTotale, 
AVG(t_pays.taux_natalite_pays) AS TauxNatalite, 
AVG(t_pays.taux_mortalite_pays) AS TauxMortalite, 
AVG(t_pays.esperance_vie_pays) AS EsperanceVie, 
AVG(t_pays.taux_mortalite_infantile_pays) AS TauxMortaliteInfantile, 
AVG(t_pays.nombre_enfants_par_femme_pays) AS NombreEnfantFemme, 
AVG(t_pays.taux_croissance_pays) AS TauxCroissance, 
SUM(t_pays.population_plus_65_pays) AS Population65Plus 
FROM t_pays';

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
GROUP BY t_pays.id_pays;
';