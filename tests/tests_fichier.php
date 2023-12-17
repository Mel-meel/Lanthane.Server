<?php

require("../C/Objets/Fichier.php") ;
require("../C/Objets/FichierAbs.php") ;
require("../C/Objets/FichierImporte.php") ;

$fichier = new Fichier(0, "test.ext", "ext", "ext") ;
$fichier = new Fichier("../C/Objets/Fichier.php") ;

var_dump($fichier);
