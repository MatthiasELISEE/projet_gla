<!doctype html>
<?php
		// connexion base
		$base = mysql_connect ('serveur', 'login', 'pass');
		mysql_select_db ('ma_base', $base) ;
?>
<html lang="fr">
	<head>
		<meta charset="utf-8">
	  	<title>Médiathèque Clichy la Garenne</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css">
	</head>

<body>
	<?php

	$id_salarie = $_REQUEST['idSalarie'];
	// lancement de la requête (on impose aucune condition puisque l'on désire obtenir la liste complète des propriétaires
	$sql = 'SELECT * FROM salarie WHERE id="'. $id_salarie .'"';

	// on lance la requête (mysql_query) et on impose un message d'erreur si la requête ne se passe pas bien (or die)
	$req = mysql_query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());

	// on va scanner tous 
	$data = mysql_fetch_array($req)
	}
	?>

	<div class="container-fluide accueil">

		<div class="container menu">
			<ul class="nav">
		  	<article class="col-md-4">
		  		<li class="nav-item">
		  		  <a style="text-decoration:none" class="nav-link active" href="index.php"><div class="ecriture_menu">Accueil</div></a>
		  		</li>
		  	</article>
		  	<article class="col-md-4">
		  		<li class="nav-item">
		    	  <a style="text-decoration:none" class="nav-link" href="liste_produit.php"><div class="ecriture_menu">Produits</div></a>
		  		</li>
		  	</article>
		  	<article class="col-md-4">
		  		<li class="nav-item">
		  		  <a style="text-decoration:none" class="nav-link" href="identification.php"><div class="ecriture_menu">S'identifier</div></a>
		  		</li>
		  	</article>
			</ul>
		</div>


		<div class="container contenu_accueil">
		
		<div class="info_compte">	
			<div class="col-md-2"></div>

			<div class="col-md-2"><img class="img_btn_accueil" src="image/icon_livre.png"></div>
				<div class="col-md-6 ">
				<ul class="list-group">
				  <li class="list-group-item disabled">Nom: <?php $data['nom']; ?> </li>
				  <li class="list-group-item">Prénom: <?php $data['prenom']; ?></li>
				  <li class="list-group-item">Email: <?php $data['email']; ?></li>
				</ul>
				</div>

			<div class="col-md-3"></div>
			
			</div>

		</div>

	</div>

</body>
</html>