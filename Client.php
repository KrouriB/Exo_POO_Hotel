<?php

class Client
{
    private string $nom;
    private string $prenom;
    private int $nbReservation;
    private DateTime $dateDebutReserve;
    private DateTime $dateFinReserve;
    
    public function __construct(string $nom, string $prenom)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->nbReservation = 0;
    }
}

?>