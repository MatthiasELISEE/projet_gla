<!doctype html>
<?php
// connexion base
$base = mysqli_connect ('localhost', 'main', 'main', 'db');

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

class VueListeProduit {
public $ado;
public $vueInfoProduit;
public $vueAccueil;
function affiche_Info_Produit($id){
	// TODO	
}
function affiche_Accueil(){
	// TODO	
}
function ajouterProduit($produit){
	// TODO	
}
function supprimerProduit($id){
	// TODO	
}
function modifierProduit(){
	// TODO	
}
function emprunterProduit($id){
	// TODO	
}
function prolongerEmprunt($id){
	// TODO	
}
}


$vue = new VueListeProduit();
if (isset($_POST["emprunter"])) {
	$vue->affiche_listeProduit_Client($_POST[$data['infoProduit']]);
}
	$sql = 'SELECT * FROM produit';
	$req = mysql_query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());
?>
	<div class="container-fluide accueil">
			<!-- Menu -->
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



		<div class="col-md-1"></div>
		<div class="container contenu_liste_produit">

			<!-- Barre de recherche -->
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
			

			<form method="post" action="">
			<div class="form-group">

				<!-- Bouton emprunter -->				
				<div class="btn_liste">
					<div class="col-md-9"></div>
					<button type="submit" class="btn btn-primary" name="emprunter">Emprunter</button>
				</div>


				<!-- la liste produit -->
				</br>
				<div class="col-md-1"></div>
				<ul class="list-group col-md-10">
					<?php
					while ($data = mysql_fetch_array($req)) {
					{
					?>
					<!-- Item produit -->
					<li class="list-group-item">
						<div class="form-check"> 
							<input type="radio" class="form-check-input" id="materialUnchecked" name="infoProduit" value=<?php $data['idProduit'];?>>
  							<label class="form-check-label" for="materialUnchecked">
  							<?php echo $data['nomProduit'] . ' | ' . $data['auteur'] . ' | ' . $data['edition']. ' | ' .$data['quantite']; ?>
  							</label>
							<a href="../fiche_produit.php" class="btn btn-primary" type="button" name=<?php echo $data['idProduit']; ?> >Info</a>
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