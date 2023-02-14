<style>
*
{
    margin: 1%;
    padding: 0;
    box-sizing: border-box;
}
</style>

<?php

spl_autoload_register(function ($class_name) {
    require_once $class_name . '.php';
});

$ib = new Hotel("Ibis","Disney","Paris","55 avenue Bisou-Nourse","95000");
$f1 = new Hotel("F1","Europa Park","Rust","28 rue de l'Europe","77977");
$hi = new Hotel("Hilton","Double Tree","Dubai","The Walk - Dubai Marina","00000");

$ci1 = new Chambre(450,true,$ib,4);
$ci2 = new Chambre(100,false,$ib,1);
$ci3 = new Chambre(250,true,$ib,2);
$cf1 = new Chambre(130,false,$f1,1);
$cf2 = new Chambre(195,true,$f1,1);
$cf3 = new Chambre(220,false,$f1,2);
$cf4 = new Chambre(360,true,$f1,2);
$cf5 = new Chambre(310,false,$f1,3);
$cf6 = new Chambre(467,true,$f1,3);
$cf7 = new Chambre(400,false,$f1,4);
$cf8 = new Chambre(633,true,$f1,4);
$ch1 = new Chambre(488.12,true,$hi,3);
$ch2 = new Chambre(888.23,true,$hi,8);

$p1 = new Client("Oliva","Florian");
$p2 = new Client("Mathieu","Léa Jeanne");
$p3 = new Client("Arnold","Simon");

$r_cf1_p1 = new Reservation("21-04-2021","28-04-2021",$p1,$cf1);
$r_cf2_p2 = new Reservation("05-06-2021","18-06-2021",$p2,$cf2);
$r_ci1_p1 = new Reservation("08-08-2021","24-08-2021",$p1,$ci2);
$r_cf4_p2 = new Reservation("08-08-2021","31-08-2021",$p2,$cf4);
$r_cf8_p2 = new Reservation("01-01-2022","31-03-2022",$p2,$cf8);

$ib->afficherInfoHotel();
$ib->afficherReservationHotel();
$ib->afficherChambreHotel();
$f1->afficherInfoHotel();
$f1->afficherReservationHotel();
$f1->afficherChambreHotel();
$hi->afficherInfoHotel();
$hi->afficherReservationHotel();
$hi->afficherChambreHotel();
$p1->afficherReservationClient();
$p2->afficherReservationClient();
$p3->afficherReservationClient();

?>