<html>
<head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="css/style.css" />
        <title>Programmes</title>
</head>
<body>
	
	<?php include("header.php"); ?>

	<?php

	    $reponse = $bdd->query("SELECT * FROM scene, heure, artiste, programmes WHERE programmes.idArtiste = artiste.id AND programmes.idScene = scene.id AND programmes.idHeure = heure.id ORDER BY programmes.id");

    ?>

	<h2 class="title_page"> Programmes </h2>

        <?php while($donnees = $reponse-> fetch())
            {
        ?>
            <button id="buttonProgrammeFrench"class="accordion">
            <?php
            $date = $donnees['date'];
            setlocale(LC_TIME, 'fr', 'fr_FR', 'fr_FR.ISO8859-1');
            echo strftime("%A %d %B", strtotime($date));
            ?>
            </button>
            <div class="panel">
                <p class="nom_artiste"> <?php echo $donnees['nom_artiste']; ?> </p> 
                <p class="nom_scene"> <?php echo $donnees['nom_scene']; ?> </p>
                <p class="heure"> 
                <?php
                $heure = $donnees['heure'];
                echo strftime("%H", strtotime($heure)) . "H";
                ?> 
                </p>
            </div>
        <?php
            }
            $reponse->closeCursor();
        ?>

<script type="text/javascript" src="js/faq_programmes.js"></script>

</body>

<footer>
	<?php include("footer.html") ?>
</footer>

</html>