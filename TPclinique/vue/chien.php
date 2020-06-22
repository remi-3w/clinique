<?php
require 'header.php';
include("class/class.animal.php");
include("class/class.chien.php");
?>

<div class="container-fluid center right row ">
  <div class="card m-3 " style="width: 18rem;">
    <img src="asset/labrador.jpg " class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title"><?php echo $chien->getNom() ?></h5>
      <p class="card-text"><?php echo $chien->getPedigree() ?></p>
      <p class="card-text"><?php echo $chien->getColor() ?></p>
      <p class="card-text">{{date de naissance}}</p>
      <a href="/<?php echo "vue" . "/" . $chien->getNom() . "." . "php" ?>" class="btn btn-primary">plus d'info sur <?php echo $chien->getNom() ?></a>
    </div>
  </div>
  <div class="card m-3 " style="width: 18rem;">
    <img src="asset/bergerblanc.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title"> <?php echo "Nom :" . " " . $chien1->getNom() ?></h5>
      <p class="card-text"><?php echo "race:" . " " . $chien1->getPedigree() ?></p>
      <p class="card-text"><?php echo "couleur:" . " " . $chien1->getColor() ?></p>
      <p class="card-text">{{date de naissance}}</p>
      <a href="/<?php echo $chien1->getNom() . "php" ?>" class="btn btn-primary ">plus d'info sur <?php echo $chien1->getNom() ?></a>
    </div>
  </div>
  <div class="card m-3 " style="width: 18rem;">
    <img src="asset/caniche.jpg " class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title"><?php echo $chien2->getNom() ?></h5>
      <p class="card-text"><?php echo $chien2->getPedigree() ?></p>
      <p class="card-text"><?php echo $chien2->getColor() ?></p>
      <p class="card-text">{{date de naissance}}</p>
      <a href="#" class="btn btn-primary ">plus d'info sur <?php echo $chien2->getNom() ?></a>
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