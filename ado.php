<?php
session_start();
$servername = "localhost";
$username = "main";
$password = "main";

class Personne {
	private $idPersonne;
	private $email;
	private $prenom;
	private $nom;
	private $mdp;
	
	function __construct($data) {
		print_r($data);
		$this->idPersonne = $data["idPersonne"];
		$this->email = $data["email"];
		$this->prenom = $data["prenom"];
		$this->nom = $data["nom"];
		$this->mdp = $data["mdp"];
	}
	
	function getIdPersonne(){
		return $this->idPersonne;
	}
	function getEmail(){
		return $email;
	}
	function setEmail($login){
		$this->email = $login;
	}
	function getNom(){
		return $this->nom;
	}
	function setNom($nom) {
		$this->nom = $nom;
	}
	function getMdp(){
		return $this->mdp;
	}
	function setMdp($mdp){
		$this->mdp = $mdp;
	}
	function getPrenom(){
		return $this->nom;
	}
	function setPrenom($nom){
		$this->prenom = $nom;  
	}
}

class Salarie extends Personne {
	private $estManager;
	function getDroitManager(){
		return $estManager;   
	}
	function setDroitManager($manager){
		$estManager = $manager;
	}
}

class Actions_ADO {
	static function createAction($connection, $description, $sqlPourAnnuler) {
		$connection->query("INSERT INTO db.Action (descriptionGeneree, sqlPourAnnulerAction) VALUES ('$description','$sqlPourAnnuler')");
	}
}

class Info_Salarié_ADO {
	public $vue;
	public $salarie;
	public $connection;
	
	function __construct($id) {
		$this->connection = new mysqli($GLOBALS["servername"], $GLOBALS["username"], $GLOBALS["password"]);
		if ($this->connection->connect_error) {
			die("Connection failed: " . $this->connection->connect_error);
		}
		
		$result = $this->connection->query("SELECT * FROM dbPersonne WHERE idPersonne=$id");
		if (!$result) {
			print_r( $this->connection->error_list);
			echo "Etes vous sur que ce salarié existe";
		}
		$this->salarie = new Personne($result->fetch_assoc());
	}
	
	function supprimerSalarie_ADO(){
		$id = $this->salarie->getIdPersonne();
		
		$result = $this->connection->query("DELETE FROM db.Personne WHERE idPersonne=$id");
		// Supprimer la personne supprime aussi dans la table salarie.
		if (!$result) {
			print_r($this->connection->error_list);
			echo "Echec de la suppression.";
		}
		
		// Création de l'action correspondante.
		$nom = $this->salarie->getNom();
		$description = "Suppression du salarie $nom. Cette action ne peut pas etre annulée.";
		$sqlPourAnnuler = "";
		
		Actions_ADO::createAction($this->connection, $description, $sqlPourAnnuler);
	}
	
	function affiche_ListeSalarie_ADO(){
		// TODO
	}
}

$info = new Info_Salarié_ADO(1);
$info->supprimerSalarie_ADO();