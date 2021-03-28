<html>
<head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="css/style.css" />
        <title>Contact</title>
</head>
<body>
	
	<?php include("header.php"); ?>

	<h2 class="title_page"> Contactez-nous </h2>

	<div class="container">
		<form class="myformcontact" method="post">
                <p>
					<label for="name"> Nom : </label>
					<input type="text" id="name" name="nom" />
                </p>
				<p>
					<label for="name"> Prénom : </label>
					<input type="text" id="name" name="prenom" />
                </p>
                <p>
                    <label for="mail"> E-mail : </label>
                    <input type="email" id="mail" name="mail" />
                </p>
                <p>
					<label for="phone"> Téléphone : </label>
					<input type="tel" id="tel" name="phone" />
                </p>
                <p>
					<label for="msg"> Message : </label>
					<textarea id="msg" name="message"></textarea>
                </p>
				<input class="buttonEnvoyer" type="submit" name="valider" value="Envoyer"/>

		</form>
	</div>
	<p>
		<?php
		if (isset($_POST['nom'])) {
			$mysqli = new mysqli("localhost", "root", "", "msprfrontsoundnations");
            $mysqli -> set_charset("utf8");
            $requete='INSERT INTO formulaire VALUES(NULL, "' . $_POST['nom'] . '","' . $_POST['prenom'] . '", "' . $_POST['mail'] . '", "' . $_POST['phone'] . '", "' . $_POST['message'] . '")';
            $resultat = $mysqli -> query($requete);
            if ($resultat)
                echo "<p>Votre demande a bien été formulé</p>";
            else
                echo "<p>Erreur</p>";
		}
		?>
		</p>

</body>

<footer>
	<?php include("footer.html") ?>
</footer>

</html>