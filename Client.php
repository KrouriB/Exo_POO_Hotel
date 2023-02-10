<?php

class Client
{
    private string $nom;
    private string $prenom;
    private int $nbReservation;
    
    public function __construct(string $nom, string $prenom)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->nbReservation = 0;
    }

    public function set_nom(string $valeur)
    {
        return $this->nom = $valeur;
    }
    public function get_nom()
    {
        return $this->nom;
    }
    public function set_prenom(string $valeur)
    {
        return $this->prenom = $valeur;
    }
    public function get_prenom()
    {
        return $this->prenom;
    }
    public function set_nbReservation(int $valeur)
    {
        return $this->nbReservation = $valeur;
    }
    public function get_nbReservation()
    {
        return $this->nbReservation;
    }
}

?>