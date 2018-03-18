<?php

$argv;
$resultat;

if(is_numeric($argv[1]) == true && is_numeric($argv[3]) == true){
    if($argv[2] == "/" && $argv[3] == 0){
        die( "Impossible de diviser par 0. \n");
    } else{
        switch ($argv[2]) {
            case '+':
                $resultat = $argv[1] + $argv[3];
                print "Le resultat est : " . $resultat ."\n";
                break;
            case '-':
                $resultat = $argv[1] - $argv[3];
                print "Le resultat est : " . $resultat ."\n";
                break;
            case '*':
                $resultat = $argv[1] * $argv[3];
                print "Le resultat est : " . $resultat ."\n";
                break;
            case '/':
                $resultat = $argv[1] / $argv[3];
                print "Le resultat est : " . $resultat ."\n";
                break;
        }
    }
}
else{
    die( "Impossible de calculer. \n");
}
