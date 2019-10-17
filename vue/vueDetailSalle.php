
<h1 id="posteTitle"><?= $uneSalle['nomSalle']; ?></h1>

<h2 id="posteDesc">Les postes</h2>
<ul id="postes">
    <?php for ($i = 0; $i < count($lesPoste); $i++) { ?>
        <li>
            <span>
            	<p> Nom : <?= $lesPoste[$i]["nomPoste"] ?> </p>
            </span>
            <span>
                <p> Adresse IP : <?= $lesPoste[$i]["indIP"] ?> </p>
            </span>
            <span>
            	<p> Administarateur : <?= $lesPoste[$i]["ad"] ?> </p>
            </span>
        </li>
        </br>
    <?php } ?>
</ul>
