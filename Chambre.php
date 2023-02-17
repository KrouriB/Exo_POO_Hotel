<?php

class Chambre
{
    private int $numChambre;
    private float $prixChambre;
    private bool $wifiChambre; // true : oui , false : non
    private bool $etatChambre; // true : libre , false : prise
    private int $nbLit;
    private Hotel $hotel;
    
    public function __construct(float $prixChambre, bool $wifiChambre, Hotel $hotel, int $nbLit)
    {
        $this->hotel = $hotel;
        $this->hotel->ajoutChambre($this);    // fonction pour directement ajouter a la liste des chambre d'un hotel avant de donner le numéro de chambre
        $this->numChambre = $this->hotel->combienChambre(); // fonction contenant un count de la liste des chambre d'un hotel et donnera ce nombre au numéro de chambre
        $this->prixChambre = $prixChambre;
        $this->wifiChambre = $wifiChambre;
        $this->nbLit = $nbLit;
        $this->etatChambre = true;
    }

    public function set_numChambre(int $valeur)
    {
        return $this->numChambre = $valeur;
    }
    public function get_numChambre()
    {
        return $this->numChambre;
    }
    public function set_prixChambre(float $valeur)
    {
        return $this->prixChambre = $valeur;
    }
    public function get_prixChambre()
    {
        return $this->prixChambre;
    }
    public function set_wifiChambre(bool $valeur)
    {
        return $this->wifiChambre = $valeur;
    }
    public function get_wifiChambre()
    {
        return $this->wifiChambre;
    }
    public function set_etatChambre(bool $valeur)
    {
        return $this->etatChambre = $valeur;
    }
    public function get_etatChambre()
    {
        return $this->etatChambre;
    }
    public function set_nbLit(int $valeur)
    {
        return $this->nbLit = $valeur;
    }
    public function get_nbLit()
    {
        return $this->nbLit;
    }
    public function set_hotel(Hotel $valeur)
    {
        return $this->hotel = $valeur;
    }
    public function get_hotel()
    {
        return $this->hotel;
    }

    public function affichageWifi(bool $valeur) // true = image , false = texte
    {
        if ($valeur == false)
        {
            if ($this->wifiChambre == true)
            {
                return "oui";
            }
            else
            {
                return "non";
            }
        }
        else
        {
            if ($this->wifiChambre == true)
            {
                return "<img src='img/wifi-solid.svg' style='height:1rem'>";
            }
            else
            {
                return " ";
            }
        }
    }

    public function affichageEtat()
    {
        if ($this->etatChambre == true)
        {
            return "<p style='text-align:center;display:flex'><span style='background-color:green;color:white;padding:3% 6%'>".mb_strtoupper("disponible")."</span></p>";
        }
        else
        {
            return "<p style='text-align:center;display:flex'><span style='background-color:red;color:white;padding:3% 6%'>".mb_strtoupper("réservée")."</span></p>";
        }
    }

    public function __toString()
    {
        return "Chambre ".$this->numChambre ;
    }
}

?>