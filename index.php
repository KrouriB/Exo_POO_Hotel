<?php

spl_autoload_register(function ($class_name) {
    require_once $class_name . '.php';
});

$aa = new Hotel("Ibis","Disney","Paris","55 avenue Bisou-Nourse",95000);
$c1 = new Chambre(96.69,false,$aa,1);
$c2 = new Chambre(96.69,false,$aa,1);

?>