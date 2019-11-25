<h1>Créer un poste</h1>
<div class="row">
    <div class="col-md-12">
        <form action="./?action=creer" method="POST">
            <input type="text" name="numPostC" placeholder="Numéro du poste (ex : p1)" /><br />
            <input type="text" name="nomPostC" placeholder="Nom du poste"  /><br />
            <select name="listNomSal" id="listNomSalC">
            <?php
            for ($i = 0; $i < count($listeSalle); $i++) {
                ?>
                        <option><?php echo $listeSalle[$i]['nomSalle'] ?> </option>
                <?php } ?>
            </select> </br> 
            <select name="listTypeC" id="listTypeC">
            <?php
            for ($i = 0; $i < count($listeType); $i++) {
                ?>
                        <option><?php echo $listeType[$i]['typeLP'] ?> </option>
                <?php } ?>
            </select> </br></br>
            <input type="submit" name="creerPoste" value="Creer le poste" class="btn btn-dark"/>

        </form>
    </div>
</div>    