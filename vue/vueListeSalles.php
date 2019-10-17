
<h1>Liste des salles</h1>

<?php
for ($i = 0; $i < count($listeSalle); $i++) {
    ?>

    <div class="card">
        <div class="photoCard">
        </div>
        <div class="descrCard"><?php echo "<a href='./?action=detail&idS=" . $listeSalle[$i]['nSalle'] . "'>" . $listeSalle[$i]['nomSalle'] . "</a>"; ?>
            <br />
            Nombre de poste : <?= $listeSalle[$i]["nbPoste"] ?>
            <br />
            Adresse IP : <?= $listeSalle[$i]["indIP"] ?>
        </div>
        <div class="tagCard">
            <ul id="tagFood">		
            </ul>
        </div>
    </div>

    <?php
}
?>


