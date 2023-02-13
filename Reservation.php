<?php

class Reservation
{
    private DateTime $datedebut;
    private DateTime $datefin;
    private Client $leclient;
    private Chambre $lachambre;

    public function __construct(string $ladatedebut, string $ladatefin, Client $leclient, Chambre $lachambre)
    {
        $this->lachambre = $lachambre;
        if ($this->lachambre->get_etatChambre() == false)
        {
            echo "la chambre est deja occupé";
        }
        else
        {
            $this->datedebut = new DateTime($ladatedebut);
            $this->datefin = new DateTime($ladatefin);
            $this->leclient = $leclient;
            $this->leclient->ajoutReservation($this); // future fonction qui stockera les objet reservation d'un objet client
            $this->lachambre->set_etatChambre(false); //mettre l'etat de la chambre comme occupé via une fonction set
            $this->lachambre->get_hotel()->ajoutReservation($this); // future fonction qui stockera les objet reservation d'un objet hotel par rapport a ces chambre
        } 
    }
    
    public function set_datedebut(string $valeur)
	{
		$this->datedebut = new DateTime($valeur);
	}
	public function get_datedebut()
	{
		return $this->datedebut;
	}
    public function set_datefin(string $valeur)
	{
		$this->datefin = new DateTime($valeur);
	}
	public function get_datefin()
	{
		return $this->datefin;
	}
    public function set_leclient(Client $valeur)
    {
        return $this->leclient = $valeur;
    }
    public function get_leclient()
    {
        return $this->leclient;
    }
    public function set_lachambre(Chambre $valeur)
    {
        return $this->lachambre = $valeur;
    }
    public function get_lachambre()
    {
        return $this->lachambre;
    }

    public function __toString()
    {
        return " - du ".$this->datedebut->format('d-m-Y')." au ".$this->datefin->format('d-m-Y');
    }
}

?>