
<h1><?= $uneSalle['nomSalle']; ?></h1>

<h2>Les postes</h2>
<ul id="postes">
    <?php for ($i = 0; $i < count($lesPoste); $i++) { ?>
        <li class="alert alert-dark">
            <span>
            	<p> Nom : <?= $lesPoste[$i]["nomPoste"] ?> </p>
            </span>
            <span>
                <p> Adresse IP : <?= $lesPoste[$i]["indIP"].".0".$lesPoste[$i]["ad"] ?> </p>
            </span>
        </li>
        </br>
    <?php } ?>
</ul>
