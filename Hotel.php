<?php

class Hotel
{
    private string $groupe;
    private string $nom;
    private string $ville;
    private string $adresse;
    private int $codePostal;
    private array $chambres;
    private array $reservation;

    public function __construct(string $groupe, string $nom, string $ville, string $adresse, int $codePostal)
    {
        $this->groupe = $groupe;
        $this->nom = $nom;
        $this->ville = $ville;
        $this->adresse = $adresse;
        $this->codePostal = $codePostal;
        $this->chambres = [];
        $this->reservation = [];
    }

    public function set_groupe(string $valeur)
    {
        return $this->groupe = $valeur;
    }
    public function get_groupe()
    {
        return $this->groupe;
    }
    public function set_nom(string $valeur)
    {
        return $this->nom = $valeur;
    }
    public function get_nom()
    {
        return $this->nom;
    }
    public function set_ville(string $valeur)
    {
        return $this->ville = $valeur;
    }
    public function get_ville()
    {
        return $this->ville;
    }
    public function set_adresse(string $valeur)
    {
        return $this->adresse = $valeur;
    }
    public function get_adresse()
    {
        return $this->adresse;
    }
    public function set_codePostal(int $valeur)
    {
        return $this->codePostal = $valeur;
    }
    public function get_codePostal()
    {
        return $this->codePostal;
    }

    public function ajoutChambre($uneChambre)
    {
        $this->chambres[] = $uneChambre;
    }

    public function ajoutReservation($uneReservation)
    {
        $this->reservation[] = $uneReservation;
    }
    
    // fonction pour avoir le nombre de chambre de l'hotel

    public function combienChambre()
    {
        return count($this->chambres);
    }

    // fonction pour compter le nombre de chambr dispo

    public function combienChambreDispo()
    {
        $dispo = 0;
        foreach ($this->chambres as $uneChamcre)
        {
            if ($uneChambre->get_etatChambre == true)
            {
                $dispo++;
            }
        }
        return $dispo;
    }

    // fonction pour afficher les info d'un hotel

    public function afficherInfoHotel()
    {
        $display = "<h2>$this</h2><br>";
        $display .= $this->adresse." ".$this->codePostal." ".strtoupper($this->ville)."<br>";
        $display .= "Nombre de chambre : ".$this->combienChambre()."<br>";
        $display .= "Nombre de chambre résrvées : ".$this->combienChambre-$this->combienChambreDispo."<br>";
        $display .= "Nombre de chambre dispo : ".$this->combienChambreDispo."<br><br>";
        echo $display;
    }

    // fonction pour afficher les reservation dans un hotel

    public function afficherReservationHotel()
    {
        if (sizeof($this->reservation) > 0)
        {
            $display = "<h3>Réservation de l'hôtel $this</h3><br>";
            $display .="<p style='text-align:center;display:flex'><span style='background-color:green;color:white;padding:0.5% 1%'>".$this->combienChambre-$this->combienChambreDispo." ".strtoupper("Réservations")."</span></p>";
            foreach ($this->reservation as $uneReservation)
            {
                $display .= $uneReservation->get_leclient()." - ".$uneReservation->get_lachambre()." -".$uneReservation."<br>";
            }
            $display .= "<br>";
            echo $display;
        }
        else{
            echo "Cette hôtel n'as pas de reservation.";
        }
    }

    // fonction pour afficher les chambre d'un hotel

    public function __toString()
    {
        return $this->groupe." ".$this->nom." ".$this->ville ;
    }
}

?>