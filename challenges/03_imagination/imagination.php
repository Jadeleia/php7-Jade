<?php

$argv;
$chiffre;

if ($argv[1] > 10){
	die("Impossible de choisir ce chiffre. \n");
} else {
	switch($argv[1]){
		case 1 :
			$chiffre = 1;
			print("Tu as choisi le " .$chiffre ."\n");
			break;
		case 2 :
			$chiffre = 2;
			print("Tu as choisi le " .$chiffre ."\n");
			break;
		case 3 :
			$chiffre = 3;
			print("Tu as choisi le " .$chiffre ."\n");
			break;
		case 4 :
			$chiffre = 4;
			print("Tu as choisi le " .$chiffre ."\n");
			break;
		case 5 :
			$chiffre = 5;
			print("Tu as choisi le " .$chiffre ."\n");
			break;
		case 6 :
			$chiffre = 6;
			print("Tu as choisi le " .$chiffre ."\n");
			break;
		case 7 :
			$chiffre = 7;
			print("Tu as choisi le " .$chiffre ."\n");
			break;
		case 8 :
			$chiffre = 8;
			print("Tu as choisi le " .$chiffre ."\n");
			break;
		case 9 :
			$chiffre = 9;
			print("Tu as choisi le " .$chiffre ."\n");
			break;
		case 10 :
			$chiffre = 10;
			print("Tu as choisi le " .$chiffre ."\n");
			break;
	}
}

switch($chiffre) {
	case 1 :
	case 3 :
	case 5 :
	case 7 :
	case 9 :
		print("Le chiffre choisi est impair. \n");
		break;
	case 2 :
	case 4 :
	case 6 :
	case 8 :
	case 10 :
		print("Le chiffre choisi est pair. \n");
		break;
}
