<?php

require("../C/Objets/FichierAbs.php") ;
require("../C/Objets/Fichier.php") ;
require("../C/Objets/FichierImporte.php") ;

$fichier = new Fichier(0, "test.ext", "ext", "ext") ;
$fichier_importe = new FichierImporte("../C/Objets/Fichier.php") ;

var_dump($fichier);
var_dump($fichier_importe);

var_dump($fichier->get_nom());
