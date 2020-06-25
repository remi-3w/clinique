<?php
require("controler/connexion.php");
require("header.php");
include("class/class.animal.php");
include("class/class.chien.php");
$DB = new DB();

$query = $DB->db->prepare(
  'SELECT
  *
FROM clinique.animal
INNER JOIN clinique.propriétaire
ON animal.idPropriétaire = clinique.propriétaire.id
INNER JOIN clinique.chien
ON animal.id = clinique.chien.idAnimal'
  // ORDER BY animal.id'
);

$query->execute();


$animals = $query->fetchAll(PDO::FETCH_ASSOC);


// var_dump($animals);

// $query2 = $DB->db->prepare(
//   'SELECT
//   *
// FROM clinique.propriétaire
// ORDER BY id'
// );

// $query2->execute();


// $propriétaire = $query2->fetchAll(PDO::FETCH_ASSOC);
// var_dump($propriétaire);
?>
<div class="container-fluid row justify ">
  <?php
  foreach ($animals as $animal) :
  ?>

    <div class="card m-2 p-0  " style="width: 13rem;">
      <p>Animal enregistré n°<?= $animal['idAnimal'] ?>
        <img src="asset/bergerblanc.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Nom :<?= $animal['nomAnimal'] ?></h5>
          <p class="card-text">Né le : <?= $animal['dateNaissance'] ?></p>
          <p class="card-text">décedé le : <?= $animal['datedécès'] ?></p>
          <p class="card-text">Appartient à : <?= $animal['Prénom'] ?></p>
          <p class="card-text">taille : <?= $animal['taille'] ?> cm</p>
          <p class="card-text">Poids : <?= $animal['poids'] ?> kg</p>
          <a href="/<?php echo "vue" . "/" . $animal['nom'] . "." . "php" ?>" class="btn btn-primary">plus d'info sur <?php echo $animal['nom'] ?></a>
        </div>
    </div>

  <?php endforeach ?>
</div>
<?php
require 'footer.php'; ?>