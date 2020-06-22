<?php
require 'header.php';
?>
<div class="container-fluid m-2">
    <h1>Exercice:</h1>
    <p>
        Réaliser un site web "La clinique" en utilisant le php orienté Objet pour définir les animaux et contuire leurs "fiches"
    </p>
    <ul>
        <p>Pour cela j'ai coder:</p>
        <li class='m-1'>
            Une <a href type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">classe</a> Animal (dite mère) ayant 2 argument: $nom; $pedigree, et 2 methodes associés
        </li>

        <li class='m-1'>
            Deux <a href type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal1">classes</a> (dite fille) Chien & chat ayant pour arguments respectifs $couleurs & $sexe et 1 methode associée (setter + getter).
        </li>

    </ul>



    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg text-center ">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">La classe mère</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="asset/classanimal.jpg"></img>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl text-center ">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Les classes filles</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="asset/classfille.jpg"></img>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>



</div>
<div class="container-fluid m-2" style=height:400px;>


</div>

<?php
require 'footer.php';
?>