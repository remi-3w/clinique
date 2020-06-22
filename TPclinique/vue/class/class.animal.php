<?php

class Animal
{
    private $nom;
    private $pedigree;


    public function __construct($nouveauNom)
    {
        $this->nom = $nouveauNom;
    }


    // Un getter ou accesseur sert à récupérer
    public function GetNom()
    {
        return $this->nom;
    }

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
