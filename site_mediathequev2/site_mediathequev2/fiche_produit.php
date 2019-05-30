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
	$idProd = $_REQUEST['idProduit'];	
	$sql = 'SELECT * FROM produit WHERE idProd="'. $idProd .'"';

	$req = mysql_query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());
 
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
				  <li class="list-group-item disabled">Titre: <?php $data['nomProd']; ?> </li>
				  <li class="list-group-item">Genre: <?php echo $data['auteur']; ?></li>
				  <li class="list-group-item">Auteur: <?php echo $data['etat']; ?> </li>
				  <li class="list-group-item">Catégorie: <?php echo $data['categorie']; ?> </li>
				  <li class="list-group-item">Edition: <?php echo $data['edition']; ?> </li>
				  <li class="list-group-item">Date de publication: <?php echo $data['datePublie']; ?> </li>
				  <li class="list-group-item">Quantite: <?php echo $data['quantite']; ?> </li>
				  <li class="list-group-item">Note: <?php echo $data['noteDocument']; ?> </li>
				  <li class="list-group-item">Description: <?php echo $data['description']; ?> </li>
				</ul>
				</div>

			<div class="col-md-3"></div>
			
			</div>

		</div>

	</div>

</body>
</html>