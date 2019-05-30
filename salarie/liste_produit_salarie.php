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
	require(vue.php);
	$vue = new VueListeProduit_Salarie();
	if (isset($_POST["ajouter"])) {
		$vue->affiche_listeProduit_Salarie($_POST[$data['infoProduit']]);
	}
	if (isset($_POST["modifier"])) {
		$vue->affiche_modifierProduit($_POST[$data['infoProduit']]);
	}
	if (isset($_POST["supprimer"])) {
		$vue->affiche_listeProduit($_POST[$data['infoProduit']]);
	}		
		$data['idProduit']
		$sql = 'SELECT * FROM produit';
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
				<div class="btn_liste">
					<div class="col-md-7"></div>
					<button type="submit" class="btn btn-primary " name="ajouter">Ajouter</button>
					<button type="submit" class="btn btn-danger " name="supprimer">Supprimer</button>
					<button type="submit" class="btn btn-warning " name="modifier">Modifier</button>
				</div>


				<!-- la liste produit -->
				</br>
				<div class="col-md-1"></div>
					<!-- Item produit -->
				<ul class="list-group col-md-10">
					<?php
					while ($data = mysql_fetch_array($req)) {
					{
					?>
					<li class="list-group-item">
						<div class="form-check"> <input type="radio" class="form-check-input" id="materialUnchecked" name="infoProduit" value=<?php $data['idProduit']; ?>>
  							<label class="form-check-label" for="materialUnchecked">
  							<?php echo $data['nomProduit'] . ' | ' . $data['auteur'] . ' | ' . $data['edition']. ' | ' .$data['quantite']; ?>
  							</label>
  							<a href="fiche_produit.php" class="btn btn-primary" type="button">Info</a>
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