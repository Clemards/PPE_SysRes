<h1>Modifier un poste</h1>
<div class="row">
    <div class="col-md-12">
        <label>Poste existant :</label>
        <select class="btn btn-dark dropdown-toggle" name="listNumPostAffich" id="listNumPostAffich">
            <?php
            for ($i = 0; $i < count($listePoste); $i++) {
                ?>
                        <option><?php echo $listePoste[$i]['nPoste']."/".$listePoste[$i]['nomPoste']."/".$listePoste[$i]['typePoste']."/".$listePoste[$i]['nSalle']?> </option>
                <?php } ?>
        </select> </br> </br>
        <label style="color : FireBrick ; font-style : italic"> Veillez à bien renseigner tous les champs même ceux à ne pas modifier en leur redonnant les mêmes données qu'ils ont déjà !</label>
    <label style="color : FireBrick ; font-style : italic"> La page vous indiquera si le poste à bien été créer, dans le cas contraire réessayer !</label>
        <form action="./?action=modifier" method="POST">
            <label>Choix du poste :</label>
            <select class="btn btn-dark dropdown-toggle" name="numPoste" id="listNumPost">
            <?php
            for ($i = 0; $i < count($listePoste); $i++) {
                ?>
                        <option><?php echo $listePoste[$i]['nPoste'] ?> </option>
                <?php } ?>
            </select> </br>
            <label>Choix de la salle :</label>
            <select class="btn btn-dark dropdown-toggle" name="numSalle" id="listNumSal">
            <?php
            for ($i = 0; $i < count($listeSalle); $i++) {
                ?>
                        <option><?php echo $listeSalle[$i]['nSalle'] ?> </option>
                <?php } ?>
            </select> </br>
            <label>Choix du type :</label>
            <select class="btn btn-dark dropdown-toggle" name="typePoste" id="listTypeM">
            <?php
            for ($i = 0; $i < count($listeType); $i++) {
                ?>
                        <option><?php echo $listeType[$i]['typeLP'] ?> </option>
                <?php } ?>
            </select> </br>
            <label>Choix du nom :</label>
            <input type="text" name ="nomPoste" d="nomPostM" placeholder="Nom du poste" /><br/> </br>
            <input type="submit" id="modifPoste" value="Modifier le poste" class="btn btn-success"/>
        </form>
    </div>
</div>    
 