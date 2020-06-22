<?php
require 'header.php';
include("class/class.animal.php");
include("class/class.chat.php");
?>

<div class="container-fluid row">
  <div class="card m-3 " style="width: 18rem;">
    <img src="asset/scottish.jpg " class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title"><?php echo $chat->getNom() ?></h5>
      <p class="card-text"><?php echo $chat->getPedigree() ?></p>
      <p class="card-text"><?php echo $chat->getGenre() ?></p>
      <p class="card-text">{{date de naissance}}</p>
      <a href="/<?php echo "La%20clinique/vue/" . $chat->getNom() . "." . "php" ?>" class="btn btn-primary">plus d'info sur <?php echo $chat->getNom() ?></a>
    </div>
  </div>
  <div class="card m-3 " style="width: 18rem;">
    <img src="asset/siamois.jpg " class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title"><?php echo $chat1->getNom() ?></h5>
      <p class="card-text"><?php echo $chat1->getPedigree() ?></p>
      <p class="card-text"><?php echo $chat1->getGenre() ?></p>
      <p class="card-text">{{date de naissance}}</p>
      <a href="/<?php echo "La%20clinique/vue/" . $chat->getNom() . "." . "php" ?>" class="btn btn-primary">plus d'info sur <?php echo $chat1->getNom() ?></a>
    </div>
  </div>
  <div class="card m-3 " style="width: 18rem;">
    <img src="asset/selkyrex.jpg " class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title"><?php echo $chat2->getNom() ?></h5>
      <p class="card-text"><?php echo $chat2->getPedigree() ?></p>
      <p class="card-text"><?php echo $chat2->getGenre() ?></p>
      <p class="card-text">{{date de naissance}}</p>
      <a href="/<?php echo "La%20clinique/vue/" . $chat->getNom() . "." . "php" ?>" class="btn btn-primary">plus d'info sur <?php echo $chat2->getNom() ?></a>
    </div>
  </div>
  <div class="card m-3 text-center " style="width: 18rem;">
    <img src="https://via.placeholder.com/150 " class="card-img-top" alt="...">
    <div class="card-body">

      <h2 class="card-title">Ajouter</h2>
      <a href="tp.php">
        <p class="card-text"><i class="far fa-calendar-plus" style=" font-size: 5rem;"></i></p>
      </a>
    </div>
  </div>
  <div class="card m-3 text-center" style="width: 18rem;">
    <img src="https://via.placeholder.com/150 " class="card-img-top" alt="...">
    <div class="card-body">

      <h2 class="card-title">Ajouter</h2>
      <a href="tp.php">
        <p class="card-text"><i class="far fa-calendar-plus" style=" font-size: 5rem;"></i></p>
      </a>
    </div>
  </div>




</div>


<?php
require 'footer.php';
?>