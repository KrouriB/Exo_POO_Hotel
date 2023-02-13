<?php

class Client
{
    private string $nom;
    private string $prenom;
    private int $nbReservation;
    private array $reservation;
    
    public function __construct(string $nom, string $prenom)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->nbReservation = 0;
        $this->reservation = [];
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

    public function ajoutReservation($uneReservation)
    {
        $this->reservation[] = $uneReservation;
    }

    // fonction pour savoir le nombre de reservation

    public function combienReservation()
    {
        return count($this->reservation);
    }

    // fonction pour afficher les reservation d'une personne

    public function afficherReservationClient()
    {
        if (sizeof($this->reservation) > 0)
        {
            $display = "<h3>Réservation de < $this/h3><br>";
            $display .="<p style='text-align:center;display:flex'><span style='background-color:green;color:white;padding:0.5% 1%'>".$this->combienReservation()." ".strtoupper("Réservations")."</span></p>"
            foreach ($this->reservation as $uneReservation)
            {
                $display .= "<strong>Hotel : ".$uneReservation->lachambre->hotel." / </strong>".$uneReservation->lachambre." (".$uneReservation->lachambre->nbLit." lits - ".$uneReservation->lachambre->prixChambre." € - Wifi : ".$uneReservation->lachambre->affichageWifi(false).") ".$uneReservation."<br>";
            }
            $display .= "Total : ".$uneReservation->tempsReservation()*$uneReservation->lachambre->prixChambre." € <br><br>";
            echo $display;
        }
        else
        {
            echo "Cette personne n'as pas de réservation.";
        }
    }

    public function __toString()
    {
        return $this->prenom." ".$this->nom ;
    }
}

?>