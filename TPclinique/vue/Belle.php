<?php
require 'header.php';
include("class/class.animal.php");
include("class/class.chat.php");
?>

<div class="card m-3 " style="width: 18rem;">
  <img src="https://via.placeholder.com/150 " class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php echo $chat->getNom() ?></h5>
    <p class="card-text"><?php echo $chat->getPedigree() ?></p>
    <p class="card-text"><?php echo $chat->getGenre() ?></p>
    <p class="card-text">{{date de naissance}}</p>
    <span class="textarea">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, facilis architecto! Mollitia labore neque ducimus voluptatibus quod temporibus libero dolor laudantium odit quae fugiat nemo, beatae, molestias quam a nesciunt?
    </span>
  </div>
</div>


<?php
require 'footer.php';
?>