<?php

class Chambre
{
    private int $nimChambre;
    private float $prixChambre;
    private bool $WifiChambre;
    private bool $etatChambre;
    private int $nbLit;
    private DateTime $dateDebutReserve;
    private DateTime $dateFinReserve;
    private Hotel $appartenance;
}

?>