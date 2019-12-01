
<h1>Liste des salles</h1>

<?php
for ($i = 0; $i < count($listeSalle); $i++) {
    ?>

    <div class="row">
        <div class="col-md-12">
           <div class="card">
              <?php echo "<a href='./?action=det&idS=" . $listeSalle[$i]['nSalle'] . "'>" . $listeSalle[$i]['nomSalle'] . "</a>"; ?>
               <br />
               Nombre de poste : <?= $listeSalle[$i]["nbPoste"] ?>
               <br />
               Adresse IP : <?= $listeSalle[$i]["indIP"] ?>
         </div>
        </div>
        <div class="tagCard">
            <ul id="tagFood">
            </ul>
        </div>
    </div>

    <?php
}
?>
