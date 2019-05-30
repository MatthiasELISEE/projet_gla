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
		<link rel="stylesheet" href="../css/bootstrap.min.css">
		<link rel="stylesheet" href="../css/style.css">
	</head>

<body>
	<?php
	$idClient = $_REQUEST['idProduit'];	
	$sql = 'SELECT * FROM client WHERE id="'. $idClient .'"';

	$req = mysql_query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());
 
	$data = mysql_fetch_array($req)
	}
	?>
	<div class="container-fluide accueil">

		<div class="container menu">
			<ul class="nav">
		  	<article class="col-md-3">
		  		<li class="nav-item">
		  		  <a style="text-decoration:none" class="nav-link active" href="index_client.php"><div class="ecriture_menu">Accueil</div></a>
		  		</li>
		  	</article>
		  	<article class="col-md-4">
		  		<li class="nav-item">
		    	  <a style="text-decoration:none" class="nav-link" href="liste_produit_client.php"><div class="ecriture_menu">Produits</div></a>
		  		</li>
		  	</article>
		  	<article class="col-md-3">
		  		<li class="nav-item">
		  		  <a style="text-decoration:none" class="nav-link" href="mon_compte.php"><div class="ecriture_menu">Mon Compte</div></a>
		  		</li>
		  	</article>
		  	<article class="col-md-2">
		  		<li class="nav-item">
		  		  <a style="text-decoration:none" class="nav-link"><div class="btn btn-danger">Deconnexion</div></a>
		  		</li>
		  	</article>
			</ul>
		</div>



		<div class="container contenu_accueil">
			<div class="info_compte">
			
			<div class="col-md-2"></div>
			<!-- Variable nom php -->
			<div class="col-md-2"><img class="img_btn_accueil" src="../image/photo_de_profil.png"></div>
				<div class="col-md-6 ">
				<ul class="list-group">
				  <li class="list-group-item disabled">Nom: <?php echo $data['nom'] ?></li>
				  <li class="list-group-item">Prénom: <?php echo $data['prenom'] ?></li>
				  <li class="list-group-item">email: <?php echo $data['email'] ?></li>
				  <li class="list-group-item">Solde: <?php echo $data['soldeClient'] ?></li>
				</ul>
				</div>

			<div class="col-md-3"></div>
			
			</div>
		</div>
		</div>

	</div>

</body>
</html>