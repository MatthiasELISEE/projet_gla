<!doctype html>
<?php
		// connexion base
		$base = mysql_connect ('serveur', 'login', 'pass');
		mysql_select_db ('ma_base', $base) ;
?>
<html lang="fr">
	<head>
		<meta charset="utf-8">
	  	<title>Liste Produit</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css">
	</head>

<body>
	<?php
		$sql = 'SELECT * FROM produit';
		$req = mysql_query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());
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

		<div class="col-md-1"></div>
		<div class="container contenu_liste_produit">

			<!-- Search form -->
			</br>
			<div class="col-md-1"></div>
			<div class="col-md-7">
				<form class="form-inline md-form mr-auto mb-4">
				<!-- Bouton de recherche -->
			  <input class="form-control mr-sm-2" type="text" placeholder="Recherche Produit" aria-label="Search">
			  <button class="btn btn-elegant btn-rounded btn-sm my-0" type="submit">Rechercher</button>
			</form>
			</div>

			</br>

			<form>
			<div class="form-group">
				
				</br>

				<div class="col-md-6"></div>
				<ul class="list-group col-md-11">
					<?php
					while ($data = mysql_fetch_array($req)) {
					{
					?>
					<li class="list-group-item">
						<div class="form-check"> <input type="radio" class="form-check-input" id="materialUnchecked" name="materialExampleRadios">
  						<!-- Affichage liste produit-->
 							<label class="form-check-label" for="materialUnchecked">
 							<?php echo $data['nomProduit'] . ' | ' . $data['auteur'] . ' | ' . $data['edition']. ' | ' .$data['quantite']; ?> 
 							</label>
							<a href="fiche_produit.php" class="btn btn-primary" type="button" name=<?php echo $data['idProduit']; ?> >Info</a>
						</div>
					</li>
					<?php 
					}
					mysql_free_result ($req);
					mysql_close ();
					?>
				</ul>

			</div>
			</form>
		</div>

	</div>

</body>
</html>