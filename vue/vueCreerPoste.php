<h1>Créer un poste</h1>
<div class="row">
    <div class="col-md-12">
    <label style="color : FireBrick ; font-style : italic"> Veillez à bien renseigner tous les champs même ceux à ne pas modifier en leur redonnant les mêmes données qu'ils ont déjà !</label>
    <label style="color : FireBrick ; font-style : italic"> La page vous indiquera si le poste à bien été créer, dans le cas contraire réessayer !</label>
        <form action="./?action=creer" method="POST">
            <input type="text" name="numPoste" placeholder="Numéro du poste (ex : p1)" /><br />
            <input type="text" name="nomPoste" placeholder="Nom du poste"  /><br />
            <select class="btn btn-dark dropdown-toggle" name="numSalle" id="listNomSalC">
            <?php
            for ($i = 0; $i < count($listeSalle); $i++) {
                ?>
                        <option><?php echo $listeSalle[$i]['nSalle'] ?> </option>
                <?php } ?>
            </select> </br> 
            <select class="btn btn-dark dropdown-toggle" name="typePoste" id="listTypeC">
            <?php
            for ($i = 0; $i < count($listeType); $i++) {
                ?>
                        <option><?php echo $listeType[$i]['typeLP'] ?> </option>
                <?php } ?>
            </select> </br></br>
            <input type="submit" name="creerPoste" value="Creer le poste" class="btn btn-success"/>

        </form>
    </div>
</div>    