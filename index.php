<?php

require "vendor/autoload.php";

$instance = new App\Calcul();

$resultat = $instance->additionner(10,20);
var_dump($resultat);

use Carbon\Carbon;

$aujourdhui = Carbon::now();

echo $aujourdhui->format('d-m-Y');

echo " <br> Hello, World !" ;