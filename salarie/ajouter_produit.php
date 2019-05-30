<!doctype html>

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
	if (isset($_POST["listeProduit"])) {
		$vue->affiche_ListeProduit();
	}
?>
	<div class="container-fluide accueil">

		<div class="container menu">

			<!-- MENU -->
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
				<h2 class="display-3 text-center bg-info py-4 mb-3 d-none d-md-block">Ajouter</h2>
			</br>
			
			<!-- Formulaire d'AJOUT -->
			<form method="" action="">
			  <div class="form-group">
    			<label for="formGroupExampleInput">Nom Produit</label>
    			<input type="text" class="form-control" id="formGroupExampleInput" name="nomProduitAjout">
  			  </div>
  			  <div class="form-group">
    			<label for="formGroupExampleInput">Auteur</label>
    			<input type="text" class="form-control" id="formGroupExampleInput" name="auteurProduitAjout">
  			  </div>
			  <div class="form-group">
			    <label for="exampleFormControlTextarea1">Description</label>
			    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="descritpionAjout"></textarea>
			  </div>
			  <button type="submit" class="btn btn-primary"  name="listeProduit">Ajouter</button>
			</form>

		</div>

	</div>

</body>
</html>