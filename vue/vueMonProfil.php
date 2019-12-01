
<h1>Mon profil</h1>

Mon adresse électronique : <?= $util["email"] ?> <br />
Mon nom : <?= $util["name"] ?> <br/>
Mon level : <?= $util["level"] ?> <br/><br/>

<?php 
if ($util["level"] == 2) { ?>
    <a href="./?action=creer" class="btn btn-dark">Créer un poste</a>
    <a href="./?action=modifier" class="btn btn-dark">Modifier un poste</a><br/>
<?php } ?>
<hr>
<a href="./?action=deconnexion" class="btn btn-danger">Se deconnecter</a>


