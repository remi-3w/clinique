<?php

class Chat extends Animal
{
        private $id;


        public function Setid($newid)
        {
                $this->id = $newid;
        }
        //Un getter ou accesseur sert à récupérer
        public function Getid()
        {
                return $this->id;
        }
}

// // chat1
// $chat = new Chat("Belle");
// $chat->SetPedigree("Chartreux");
// $chat->SetGenre("femelle");

// // // chat 2
// $chat1 = new Chat("miaouss");
// $chat1->SetPedigree("Siamois");
// $chat1->SetGenre("femelle");

// // //chat3
// $chat2 = new Chat("serpillère");
// $chat2->SetPedigree("Selkyrex");
// $chat2->SetGenre("male");
