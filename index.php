<?php

spl_autoload_register(function($className){

   
    $className = str_replace("App", "Class", $className);
    $className = str_replace("\\", "/", $className);
    var_dump($className); die();

});

// require 'class/Calcul.php'; 

$instance = new App\Calcul();

$resultat = $instance->additionner(10,20);
var_dump($resultat);


echo "Hello, World !" ;