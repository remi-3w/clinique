<?php

class Chat extends Animal
{
        protected $genre;

        //Un setter ou mutateur sert à définir
        public function SetGenre($newgenre)
        {
                $this->genre = $newgenre;
        }
        //Un getter ou accesseur sert à récupérer
        public function GetGenre()
        {
                return $this->genre;
        }
}

// chat1
$chat = new Chat("Belle");
$chat->SetPedigree("Chartreux");
$chat->SetGenre("femelle");

// // chat 2
$chat1 = new Chat("miaouss");
$chat1->SetPedigree("Siamois");
$chat1->SetGenre("femelle");

// //chat3
$chat2 = new Chat("serpillère");
$chat2->SetPedigree("Selkyrex");
$chat2->SetGenre("male");
