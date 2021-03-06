<?php 

include("config/config.inc.php");
try {
$bdd = new PDO($url, $login, $password);
}
catch(Exception $e) {
die('Erreur : ' . $e->getMessage());
}

?>

<html>
<head>
	<meta charset="UTF-8">
	<title> Sound Nations </title>
   <link rel="stylesheet" href="css/style.css">
   <!-- bootstrap 4.5 -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</head>

<body>
	
	<nav id="navbar" class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="index.php"><img id="logo_header" src="images/logo.png" alt="logo Nation Sounds"></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		  <span class="navbar-toggler-icon"></span>
		</button>
  
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
    	<ul class="navbar-nav mr-auto">
    	  <li class="nav-item">
    	    <a class="nav-link" href="infos.php">Informations générales et actualités</a>
    	  </li>
      	<li class="nav-item">
      		<a class="nav-link" href="programmes.php">Programmes</a>
      	</li>
      	<li class="nav-item">
      		<a class="nav-link" href="billeterie.php">Billeterie</a>
      	</li>
      	<li class="nav-item">
      		<a class="nav-link" href="faq.php">FAQ</a>
      	</li>
      	<li class="nav-item">
      		<a class="nav-link" href="reseaux.php">Réseaux sociaux</a>
      	</li>
      	<li class="nav-item">
      		<a class="nav-link" href="partenaires.php">Partenaires</a>
      	</li>
      	<li class="nav-item">
      		<a class="nav-link" href="cartes.php">Cartes</a>
      	</li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
        </li>
      </ul>
  	</div>
	  </nav>