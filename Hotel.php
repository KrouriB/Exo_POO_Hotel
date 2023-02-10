<?php

class Hotel
{
    private string $groupe;
    private string $nom;
    private string $ville;
    private string $adresse;
    private int $codePostal;
    private array $chambres;

    public function __construct(string $groupe, string $nom, string $ville, string $adresse, int $codePostal)
    {
        $this->groupe = $groupe;
        $this->nom = $nom;
        $this->ville = $ville;
        $this->adresse = $adresse;
        $this->codePostal = $codePostal;
        $this->chambres = [];
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

    public function combienChambre()
    {
        return count($this->chambres);
    }
}

?>