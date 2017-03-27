<?php
	$ligne = 1;
	$tic = fopen("cs_figures.csv", "a+");
	while ($tab = fgetcsv($tic, 1024,';')){
		$champ = count($tab);
		echo "<b>les $champ champs de la ligne $ligne sont:</b><br/>";
		$ligne ++;
		for ($i=0; $i <$champ ; $i++) { 
			echo $tab[$i]. "<br/>";
		}
	}
?>