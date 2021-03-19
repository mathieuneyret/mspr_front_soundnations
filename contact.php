<html>
<head>
	<meta charset="UTF-8">
	<title> Sound Nations - Accueil </title>
   <link rel="stylesheet" href="css/style.css">
   <!-- bootstrap 4.5 -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</head>

<body>
	<nav id="navbar" class="navbar navbar-expand-lg navbar-light bg-light">
  	<a class="navbar-brand" href="index.html">Accueil</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    	<span class="navbar-toggler-icon"></span>
  	</button>

  	<div class="collapse navbar-collapse" id="navbarSupportedContent">
    	<ul class="navbar-nav mr-auto">
    	  <li class="nav-item">
    	    <a class="nav-link" href="infos.html">Informations générales et actualités</a>
    	  </li>
      	<li class="nav-item">
      		<a class="nav-link" href="concerts.html">Concerts</a>
      	</li>
      	<li class="nav-item">
      		<a class="nav-link" href="programmes.html">Programmes</a>
      	</li>
      	<li class="nav-item">
      		<a class="nav-link" href="billeterie.html">Billeterie</a>
      	</li>
      	<li class="nav-item">
      		<a class="nav-link" href="faq.html">Informations pratiques & FAQ</a>
      	</li>
      	<li class="nav-item">
      		<a class="nav-link" href="reseaux.html">Réseaux sociaux</a>
      	</li>
      	<li class="nav-item">
      		<a class="nav-link" href="partenaires.html">Partenaires</a>
      	</li>
      	<li class="nav-item">
      		<a class="nav-link" href="cartes.html">Cartes</a>
      	</li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
        </li>
      </ul>
  	</div>
	</nav>

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
				<input type="submit" name="valider" value="Envoyer"/>

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
</html>