<?php

	//DISPLAY

	$a="Hello";
	$b="Hello 5 !";
	$c="Hello \'";
	$d=false;

	echo $a;
	echo $b;
	echo $c;

	if ($a=="Hello")
	{
		$d=true;
	}
	else $d=false;

	$a="Hello", $b="Hello 5 !", $c="Hello \'";

	//LOOP

	$i=0;

	while ($i<= 10) {
		echo $i;
		$i++;
	}

	for ($i=0; $i<=10; $i++) {
		echo $i;
	}

	function affichageNbrMax($max)
	{
		while ($max<= 10) {
			echo $max;
			$max++;
		}
	}

	affichageNbrMax(20);

	//ARRAY

	array $tab(5, 12, 10, 21, 2, 6, 8, 20, 14, 9, 12);

	//DISPLAY
	for ($i=0; $i<=sizeof($tableau); $i++) {
		echo $tab[$i];
	}

	//MOYENNE
	$somme=0;
	$moyenne=0;
	for ($i=0; $i<=sizeof($tableau); $i++) {
		$somme=$somme+$tab[$i];
	}
	$moyenne=$somme/sizeof($tableau);
	echo $moyenne;

	//NombreAPlusDe10
	$plusDeDix=0;
	for ($i=0; $i<=sizeof($tableau); $i++) {
		if ($tab[$i]>=10) {
			$plusDeDix++;
		}
	}


	//VerifSi20Present
	$present=false;
	for ($i=0; $i<=sizeof($tableau); $i++) {
		if ($tab[$i]=20) {
			$present=true;
		}
	}

	//PlusForteValeur
	$plusForteValeur=0;
	for ($i=0; $i<=sizeof($tableau); $i++) {
		if ($tab[$i]>$plusForteValeur) {
			$plusForteValeur=$tab[$i];
		}
	}
?>
