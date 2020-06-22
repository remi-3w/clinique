<?php
require 'header.php';
?>

<div class="container-fluid m-3 row">
    <img src="asset/visuel1.jpg" class="mr-3 col-2" alt="...">

    <ul class="col-8 right">
        <h1>UNE ÉQUIPE DE VÉTÉRINAIRES COMPÉTENTS EN CARDIOLOGIE À VOTRE DISPOSITION</h1>
        <ol><i class="far fa-check-circle"></i> Échographie cardiaque et doppler transthoracique</ol>
        <ol><i class="far fa-check-circle"></i> Doppler tissulaire myocardique</ol>
        <ol><i class="far fa-check-circle"></i> Mesure de la pression artérielle</ol>
        <ol><i class="far fa-check-circle"></i> Électrocardiogramme</ol>
        <ol><i class="far fa-check-circle"></i> Pose de holter</ol>
        <ol><i class="far fa-check-circle"></i> Échographie cardiaque transœsophagienne</i></ol>
        <ol><i class="far fa-check-circle"></i> Échographie 4D</ol>
        <ol><i class="far fa-check-circle"></i> Dosage des biomarqueurs cardiaques</ol>
    </ul>
    <div class='container'>
        <form method="$_POST">
            <legend>Je souhaite etre contacté par téléphone</legend>
            <div class="form-group">

                <label for="exampleInputtel"></label>
                <input type="telephone" class="form-control" id="exampleInputtel">

                <button type="submit" class="btn btn-primary m-2">Enregistrer</button> </div>

        </form>


    </div>
    /
</div>

<?php
require 'footer.php';
?>