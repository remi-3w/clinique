<?php

class Animal
{
    private $id;
    private $nom;
    private $birth;
    private $death;
    private $idPropriétaire;


    public function __construct($nouveauid, $nouveauNom, $dateNaissance, $dateMort, $nouveauidPropriétaire)
    {
        $this->id = $nouveauid;
        $this->nom = $nouveauNom;
        $this->birth = $dateNaissance;
        $this->death = $dateMort;
        $this->idPropriétaire = $nouveauidPropriétaire;
    }


    // Un getter ou accesseur sert à récupérer
    public function GetNom()
    {
        return $this->id;
        return $this->nom;
        return $this->birth;
        return $this->death;
        return $this->idPropriétaire;
    }

    // Un setter ou mutateur sert à définir
    // public function SetBirth($dateNaissance)
    // {
    //     $this->birth = $dateNaissance;
    // }

    // // Un getter ou accesseur sert à récupérer
    // public function GetBirth()
    // {
    //     return $this->birth;
    // }
    // Un setter ou mutateur sert à définir
    public function SetPedigree($pedigree)
    {
        $this->pedigree = $pedigree;
    }

    // Un getter ou accesseur sert à récupérer
    public function GetPedigree()
    {
        return $this->pedigree;
    }
}
