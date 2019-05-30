<!doctype html>
<?php
session_start();
// connexion base
$base = mysqli_connect ('localhost', 'main', 'main', 'db');
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
	print_r($_GET);
	$idProd = $_REQUEST['idProduit'];	
	$sql = 'SELECT * FROM produit WHERE idProduit="'. $idProd .'"';

	$req = mysqli_query($base, $sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysqli_error());

	
	$data = mysqli_fetch_array($req);
	if (!empty($_GET)) {
		if (isset($_GET["modifier"])) {
		}
	}
	
	?>

	<div class="container-fluide accueil">

		<?php
		include("navigation_menu.php");
		?>


		<div class="container contenu_accueil">
						
		<div>
			
			<?php
			if (isset($_SESSION["usager"])) {
			?>
			<!-- Boutons -->
			<form method="GET">
			<button type="submit" class="btn btn-primary" name="emprunter">Emprunter</button>
			<button type="submit" class="btn btn-primary" name="reserver">Réserver</button>
			
			</form>
			<?php
			if ($_SESSION["usager"]["salarie"]) { echo "<a href='./salarie/modifier_produit.php?idProduit	=$idProd'> <button class='btn btn-primary'>Modifier</button> </a>}"; } ?>
			<?php
			}
			?>
			<div class="col-md-2"></div>

			<div class="col-md-2"><img class="img_btn_accueil" src="image/icon_livre.png"></div>
				<div class="col-md-6 ">
				<ul class="list-group">
				  <li class="list-group-item disabled">Titre: <?php echo $data['nomProduit']; ?> </li>
				  <li class="list-group-item">Genre: <?php echo $data['auteur']; ?></li>
				  <li class="list-group-item">Auteur: <?php echo $data['etat']; ?> </li>
				  <li class="list-group-item">Edition: <?php echo $data['edition']; ?> </li>
				  <li class="list-group-item">Date de publication: <?php echo $data['datePublic']; ?> </li>
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