<html>
<head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="css/style.css" />
        <title>Billeterie</title>
</head>
<body>
	
	<?php include("header.php"); ?>

	<?php

		$reponse = $bdd->query("SELECT * FROM billeterie");
	
	?>

  	<h2 class="title_page"> Billeterie </h2>

	  <?php while($donnees = $reponse-> fetch())
            {
        ?>
            <button class="accordion"><?php echo $donnees['date_prix']; ?></button>
            <div class="panel">
                <p class="prix"> <?php echo $donnees['prix']; ?>€ </p> 
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