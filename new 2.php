
dans le fichier ado.php :

<?php 
class Nouveaux_Clients_ADO {
    public $vue;
    public $clients;
    function valider_Compte_ADO(){
    	update set 1
    }
}
?>

dans le fichier vue.php

<?php
require("ado.php")

class VueNouveauxClient {
    public $ado;
	public $clients
    public $vueListeClient;
	
	function __construct() {
		for (select * from clients) {
			add client to $clients;
		}
		
		$ado = new Nouveaux_Clients_ADO();
		$ado->setVue($this);
	}
	
    function affiche_ListeClient(){
    	header("Location : url vers liste client");
    }
	function affiche_InfoClient($id){
    	header("Location : url vers info client");
    }
    function valider_client($id){
    	$ado->valider_Compte_ADO();
    }
}
?>

VueAjouterProduit


dans ton html

<?
require(vue.php);
$vue = new VueNouveauxClient();

if (isset($_POST["listeclient"]) {
	$vue->affiche_ListeClient();
}
if (isset($_POST["valider"])) {
	$vue->valider_client($_POST["valider"]);
}
if (isset($_POST["infoclient"]) {
	$vue->affiche_InfoClient($_POST["infoclient"]);
}
?>

<form method = "POST">
	<input type="submit" name="click" value="listeclient"> Liste Client </input>
	<input type="submit" name="click" value="listeclient"> Liste Client </input>
	<?php
	for ($client in $vue->clients) {
		echo <input type="submit" name="valider" value=$client->idPersonne />
	}
	?>
</form>
