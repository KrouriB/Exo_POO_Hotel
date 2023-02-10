<?php

class Hotel
{
    private string $groupe;
    private string $nom;
    private string $ville;
    private string $adresse;
    private int $codePostal;
    private int $nbChambre;
    private int $dispoChambre;
    private int $reservChambre;
    private array $chambres;

    public function __construct(string $groupe, string $nom, string $ville, string $adresse, int $codePostal)
    {
        $this->groupe = $groupe;
        $this->nom = $nom;
        $this->ville = $ville;
        $this->adresse = $adresse;
        $this->codePostal = $codePostal;
        $this->nbChambre = 0;
        $this->dispoChambre = $this->nbChambre;
        $this->reservChambre = $this->nbChambre - $this->dispoChambre;
        $this->chambres = [];
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