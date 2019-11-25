<h1>Modifier un poste</h1>
<div class="row">
    <div class="col-md-12">
        <label>Poste existant :</label>
        <select name="listNumPostAffich" id="listNumPostAffich">
            <?php
            for ($i = 0; $i < count($listePoste); $i++) {
                ?>
                        <option><?php echo $listePoste[$i]['nPoste']."/".$listePoste[$i]['nomPoste']."/".$listePoste[$i]['typePoste'] ?> </option>
                <?php } ?>
        </select> </br> </br>
        <form action="./?action=modifier" method="POST">
            <label>Choix du poste :</label>
            <select name="listNumPost" id="listNumPost">
            <?php
            for ($i = 0; $i < count($listePoste); $i++) {
                ?>
                        <option><?php echo $listePoste[$i]['nPoste'] ?> </option>
                <?php } ?>
            </select> </br>
            <label>Choix de la salle :</label>
            <select name="listNumSal" id="listNumSal">
            <?php
            for ($i = 0; $i < count($listeSalle); $i++) {
                ?>
                        <option><?php echo $listeSalle[$i]['nSalle'] ?> </option>
                <?php } ?>
            </select> </br>
            <label>Choix du type :</label>
            <select name="listTypeM" id="listTypeM">
            <?php
            for ($i = 0; $i < count($listeType); $i++) {
                ?>
                        <option><?php echo $listeType[$i]['typeLP'] ?> </option>
                <?php } ?>
            </select> </br>
            <label>Choix du nom :</label>
            <input type="text" name ="nomPostM" d="nomPostM" placeholder="Nom du poste" /><br/> </br>
            <input type="submit" name="modifPoste" value="Modifier le poste" class="btn btn-dark"/>
        </form>
    </div>
</div>

<script>
    function updatePoste(){
		var numP = $('#listNumPost').val();
        var numS = $('#listNumSal').val();
        var nomP = $('#nomPostM').val();
        var typP = $('#listTypeM').val();
		$.post("/modele/ajaxModifPoste.php", {numPoste : numP, numSalle : numS, nomPoste : nomP, typePoste : typP});
	}
</script>    
 