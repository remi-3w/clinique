<?php

class Chien extends Animal
{
        private $color;


        public function SetColor($newcolor)
        {
                $this->color = $newcolor;
        }
        //Un getter ou accesseur sert à récupérer
        public function GetColor()
        {
                return $this->color;
        }
}
// chien1
$chien = new Chien("malicia");
$chien->SetPedigree("labrador");
$chien->SetColor("noire");

// chien 2
$chien1 = new Chien("paloo");
$chien1->SetPedigree("berger Blanc");
$chien1->SetColor("blanche");

//chien3
$chien2 = new Chien("medor");
$chien2->SetPedigree("caniche");
$chien2->SetColor("gris");
