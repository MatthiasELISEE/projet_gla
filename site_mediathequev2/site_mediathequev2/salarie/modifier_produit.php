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
		$idProd = $_REQUEST['idProduit'];
		$sql = 'SELECT * FROM produit WHERE idProd="'. $idProd .'"';
		$req = mysql_query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());
	?>
	<div class="container-fluide accueil">

		<div class="container menu">
			<ul class="nav">
			<div class="col-md-1"></div>
		  	<article class="col-md-2">
		  		<li class="nav-item">
		  		  <a style="text-decoration:none" class="nav-link active" href="index_salarie.php"><div class="ecriture_menu_salarie">Accueil</div></a>
		  		</li>
		  	</article>
		  	<article class="col-md-2">
		  		<li class="nav-item">
		    	  <a style="text-decoration:none" class="nav-link" href="liste_produit_salarie.php"><div class="ecriture_menu_salarie">Produits</div></a>
		  		</li>
		  	</article>
		  	<article class="col-md-2">
		  		<li class="nav-item">
		  		  <a style="text-decoration:none" class="nav-link" href="liste_client_salarie.php"><div class="ecriture_menu_salarie">Clients</div></a>
		  		</li>
		  	</article>
		  	<article class="col-md-2">
		  		<li class="nav-item">
		  		  <a style="text-decoration:none" class="nav-link" href="liste_salarie_salarie.php"><div class="ecriture_menu_salarie">Salariés</div></a>
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
			</br>
			<h2 class="display-3 text-center bg-info py-4 mb-3 d-none d-md-block">Modification</h2>
			</br>

			<form method="post" action="">
			  <div class="form-group">
    			<label for="formGroupExampleInput">Nom Produit</label>
    			<input type="text" class="form-control" id="formGroupExampleInput" placeholder=<?php $data['nomProd']; ?>>
  			  </div>
  			  <div class="form-group">
    			<label for="formGroupExampleInput">Auteur</label>
    			<input type="text" class="form-control" id="formGroupExampleInput" placeholder=<?php echo $data['etat']; ?>>
  			  </div>
			  <div class="form-group">
			    <label for="exampleFormControlTextarea1">Description</label>
			    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder=<?php echo $data['description']; ?>></textarea>
			  </div>
			  	<button type="submit" class="btn btn-primary">Modifier</button>
			</form>

		</div>

	</div>

</body>
</html>