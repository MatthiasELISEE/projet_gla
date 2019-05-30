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
	$vue = new VueAjouterProduit();
	if (isset($_POST["validerClient"])) {
		$vue->affiche_listeClient($_POST['infoClient']);
	}
	if (isset($_POST["modifierClient"])) {
		$vue->affiche_modifierClient($_POST['infoClient']);
	}
	if (isset($_POST["supprimerClient"])) {
		$vue->affiche_listeClient($_POST['infoClient']);
	}	
		$sql = 'SELECT * FROM client';
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
			  <input class="form-control mr-sm-2" type="text" placeholder="Rechercher Client" aria-label="Search">
			  <button class="btn btn-elegant btn-rounded btn-sm my-0" type="submit">Rechercher</button>
			</form>
			</div>
			</br>
			<form>
			<div class="form-group">
				<div class="btn_liste">
					<div class="col-md-7"></div>
					<button type="submit" class="btn btn-primary " name="modifierClient">Modifier</button>
					<button type="submit" class="btn btn-danger" name="supprimerClient">Supprimer</button>
					<button type="submit" class="btn btn-warning " name="validerClient">Valider</button>
				</div>

				
				</br>
				<div class="col-md-1"></div>
				<ul class="list-group col-md-10">
					<?php
					while ($data = mysql_fetch_array($req)) {
					{
					?>
					<li class="list-group-item">
			<div class="form-check"> <input type="radio" class="form-check-input" id="materialUnchecked" name="infoClient" value=<?php echo $data['id'] ?>>
  							<label class="form-check-label" for="materialUnchecked">
  							<?php echo $data['nom'] . ' | ' . $data['prenom'] . ' | ' . $data['email']; ?>
  							</label>
  							<a href="fiche_produit.php" class="btn btn-primary" type="button" name=<?php echo $data['id']; ?>>Info</a>
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