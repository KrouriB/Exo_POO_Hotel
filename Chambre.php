<?php

class Chambre
{
    private int $numChambre;
    private float $prixChambre;
    private bool $wifiChambre; // true : oui , false : non
    private bool $etatChambre; // true : libre , false : prise
    private int $nbLit;
    private DateTime $dateDebutReserve;
    private DateTime $dateFinReserve;
    private Hotel $hotel;
    
    public function __construct(float $prixChambre, bool $wifiChambre, Hotel $hotel, int $nbLit)
    {
        $this->hotel = $hotel;
        $this->hotel->ajoutChambre($this);    // future fonction pour directement ajouter a la liste des chambre d'un hotel avant de donner le numéro de chambre
        $this->numChambre = $this->hotel->combienChambre(); // ici contiendra une fonction contenant un count de la liste des chambre d'un hotel et donnera ce nombre au numéro de chambre
        $this->prixChambre = $prixChambre;
        $this->wifiChambre = $wifiChambre;
        $this->nbLit = $nbLit;
        $this->etatChambre = true;
    }

    public function get_numChambre()
    {
        return $this->numChambre;
    }
}

?>