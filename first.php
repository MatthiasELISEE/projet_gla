<?php

/* Generated from GenMyModel */





/* Généré avec GenMyModel à partir d'UML */
class Salarie {
    private $estManager;
    
    
    
    function getDroitManager(){
    	// TODO	
    }
	
    
    function setDroitManager($manager){
    	// TODO	
    }
	
}




/* Généré avec GenMyModel à partir d'UML */
class Client {
    private $soldeClient;
    
    private $adresseClient;
    
    private $compteValide;
    
    public $reservations;
    
    public $emprunts;
    
    
    
    function getAdresseClient(){
    	// TODO	
    }
	
    
    function setAdresseClient($adresse){
    	// TODO	
    }
	
    
    function getCompteValide(){
    	// TODO	
    }
	
    
    function setCompteValide($validation){
    	// TODO	
    }
	
    
    function getSoldeClient(){
    	// TODO	
    }
	
    
    function setSoldeClient(){
    	// TODO	
    }
	
}




/* Généré avec GenMyModel à partir d'UML */
class Emprunt {
    private $idEmprunt;
    
    private $idClient;
    
    private $idDocument;
    
    private $date_emprunt;
    
    private $date_retour;
    
    public $produit;
    
    
    
    function getIdEmprunt(){
    	// TODO	
    }
	
    
    function getIdClient(){
    	// TODO	
    }
	
    
    function getIdDocument(){
    	// TODO	
    }
	
    
    function setIdDocument(){
    	// TODO	
    }
	
    
    function getDate_emprunt(){
    	// TODO	
    }
	
    
    function setDate_emprunt(){
    	// TODO	
    }
	
    
    function getDate_retour(){
    	// TODO	
    }
	
    
    function setDate_retour(){
    	// TODO	
    }
	
}




/* Généré avec GenMyModel à partir d'UML */
class Produit {
    private $idProd;
    
    private $nomProd;
    
    private $auteur;
    
    private $etat;
    
    private $categorie;
    
    private $edition;
    
    private $datePublic;
    
    private $quantite;
    
    private $noteDocument;
    
    private $description;
    
    private $emprunts;
    
    private $reservations;
    
    
    
    function getIdProd(){
    	// TODO	
    }
	
    
    function setIdProd(){
    	// TODO	
    }
	
    
    function getNomProd(){
    	// TODO	
    }
	
    
    function setNomProd(){
    	// TODO	
    }
	
    
    function getAuteur(){
    	// TODO	
    }
	
    
    function setAuteur(){
    	// TODO	
    }
	
    
    function getEtat(){
    	// TODO	
    }
	
    
    function setEtat(){
    	// TODO	
    }
	
    
    function getCategorie(){
    	// TODO	
    }
	
    
    function setCategorie(){
    	// TODO	
    }
	
    
    function getEdition(){
    	// TODO	
    }
	
    
    function setEdition(){
    	// TODO	
    }
	
    
    function getDatePublic(){
    	// TODO	
    }
	
    
    function setDatePublic(){
    	// TODO	
    }
	
    
    function getQuantite(){
    	// TODO	
    }
	
    
    function setQuantite(){
    	// TODO	
    }
	
    
    function getNoteDocument(){
    	// TODO	
    }
	
    
    function setNoteDocument(){
    	// TODO	
    }
	
    
    function getDescription(){
    	// TODO	
    }
	
    
    function setDescription(){
    	// TODO	
    }
	
    
    function getEmprunts(){
    	// TODO	
    }
	
    
    function getReservations(){
    	// TODO	
    }
	
}




/* Généré avec GenMyModel à partir d'UML */
class Reservation {
    private $idReservation;
    
    private $idDocument;
    
    private $idAbonne;
    
    private $dateReservation;
    
    
    
    function getIdReservation(){
    	// TODO	
    }
	
    
    function getIdDocument(){
    	// TODO	
    }
	
    
    function getIdAbonne(){
    	// TODO	
    }
	
    
    function setIdAbonne($id){
    	// TODO	
    }
	
    
    function getDateReservation(){
    	// TODO	
    }
	
    
    function setDateReservation($date){
    	// TODO	
    }
	
}




/* Généré avec GenMyModel à partir d'UML */
class Interaction {
    
}




/* Généré avec GenMyModel à partir d'UML */
class Interaction {
    
}




/* Généré avec GenMyModel à partir d'UML */
class Interaction {
    
}




/* Généré avec GenMyModel à partir d'UML */
class Interaction {
    
}




/* Généré avec GenMyModel à partir d'UML */
class Interaction {
    
}




/* Généré avec GenMyModel à partir d'UML */
class Interaction {
    
}




/* Généré avec GenMyModel à partir d'UML */
class Interaction {
    
}




/* Généré avec GenMyModel à partir d'UML */
class Interaction {
    
}




/* Généré avec GenMyModel à partir d'UML */
class Interaction {
    
}




/* Généré avec GenMyModel à partir d'UML */
class Interaction {
    
}




/* Généré avec GenMyModel à partir d'UML */
class Interaction {
    
}




/* Généré avec GenMyModel à partir d'UML */
class Interaction {
    
}




/* Généré avec GenMyModel à partir d'UML */
class Interaction {
    
}




/* Généré avec GenMyModel à partir d'UML */
class Interaction {
    
}




/* Généré avec GenMyModel à partir d'UML */
class Interaction {
    
}




/* Généré avec GenMyModel à partir d'UML */
class Interaction {
    
}




/* Généré avec GenMyModel à partir d'UML */
class StateMachine {
    
}




/* Généré avec GenMyModel à partir d'UML */
class Interaction {
    
}




/* Généré avec GenMyModel à partir d'UML */
class VueConnexion {
    public $login;
    
    public $mdp;
    
    public $vueAccueil;
    
    public $ado;
    
    
    
    function checkLogin(){
    	// TODO	
    }
	
    
    function checkMdp(){
    	// TODO	
    }
	
    
    function rentre id et mdp(){
    	// TODO	
    }
	
}




/* Généré avec GenMyModel à partir d'UML */
class VueAccueil {
    public $ado;
    
    public $vueInscription;
    
    public $vueListeProduit;
    
    public $vueListeClient;
    
    public $vueListeSalarie;
    
    
    
    function affiche_listeSalarie(){
    	// TODO	
    }
	
    
    function affiche_ListeSalarié(){
    	// TODO	
    }
	
    
    function clique sur "Liste Produit"(){
    	// TODO	
    }
	
    
    function affiche_MonCompte(){
    	// TODO	
    }
	
    
    function affiche_logActions(){
    	// TODO	
    }
	
    
    function rechercheProduit(){
    	// TODO	
    }
	
    
    function rechercheSalarie(){
    	// TODO	
    }
	
    
    function affiche_Inscription(){
    	// TODO	
    }
	
    
    function affiche_ListeClient(){
    	// TODO	
    }
	
}




/* Généré avec GenMyModel à partir d'UML */
class VueListeSalarie {
    public $ado;
    
    public $vueAccueil;
    
    
    
    function rechercheSalarie(){
    	// TODO	
    }
	
    
    function affiche_infoSalarie($id){
    	// TODO	
    }
	
    
    function affiche_Accueil(){
    	// TODO	
    }
	
}




/* Généré avec GenMyModel à partir d'UML */
class VueInformationSalarié {
    public $vueListeSalarie;
    
    
    
    function supprimerSalarie(){
    	// TODO	
    }
	
    
    function affiche_ListeSalarie(){
    	// TODO	
    }
	
}




/* Généré avec GenMyModel à partir d'UML */
class Connexion_ADO {
    public $vue;
    
    public $personneConnectee;
    
    
    
    function identification(){
    	// TODO	
    }
	
}




/* Généré avec GenMyModel à partir d'UML */
class Accueil_ADO {
    public $vue;
    
    
    
    function affiche_ListeSalarie_ADO(){
    	// TODO	
    }
	
    
    function affiche_ListeClient_ADO(){
    	// TODO	
    }
	
    
    function affiche_ListeProduit(){
    	// TODO	
    }
	
    
    function affiche_MonCompte_ADO(){
    	// TODO	
    }
	
    
    function rechercheProduit_ADO(){
    	// TODO	
    }
	
    
    function rechercheCompte_ADO(){
    	// TODO	
    }
	
    
    function affiche_Inscription_ADO(){
    	// TODO	
    }
	
}




/* Généré avec GenMyModel à partir d'UML */
class Liste_Salarié_ADO {
    public $salaries;
    
    public $recherche;
    
    public $vue;
    
    
    
    function affiche_infoSalarie_ADO($id){
    	// TODO	
    }
	
    
    function recherche(){
    	// TODO	
    }
	
}




/* Généré avec GenMyModel à partir d'UML */
class Info_Salarié_ADO {
    public $vue;
    
    public $salarie;
    
    
    
    function supprimerSalarie_ADO(){
    	// TODO	
    }
	
    
    function affiche_ListeSalarie_ADO(){
    	// TODO	
    }
	
}




/* Généré avec GenMyModel à partir d'UML */
class VueListeClient {
    public $ado;
    
    public $vueAccueil;
    
    
    
    function affiche_NouveauxClient(){
    	// TODO	
    }
	
    
    function affiche_Accueil(){
    	// TODO	
    }
	
    
    function ajouterClient(){
    	// TODO	
    }
	
    
    function modifierClient(){
    	// TODO	
    }
	
    
    function supprimerClient(){
    	// TODO	
    }
	
    
    function affiche_InfoClient($id){
    	// TODO	
    }
	
}




/* Généré avec GenMyModel à partir d'UML */
class VueNouveauxClient {
    public $ado;
    
    public $vueListeClient;
    
    
    
    function affiche_ListeClient(){
    	// TODO	
    }
	
    
    function valider_client(){
    	// TODO	
    }
	
    
    function affiche_InfoClient($id){
    	// TODO	
    }
	
}




/* Généré avec GenMyModel à partir d'UML */
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




/* Généré avec GenMyModel à partir d'UML */
class VueInfoProduit {
    public $ado;
    
    public $vueListeProduit;
    
    
    
    function affiche_ListeProduit(){
    	// TODO	
    }
	
    
    function supprimerProduit(){
    	// TODO	
    }
	
    
    function modifierProduit(){
    	// TODO	
    }
	
    
    function emprunterProduit(){
    	// TODO	
    }
	
    
    function ajouterProduit(){
    	// TODO	
    }
	
}




/* Généré avec GenMyModel à partir d'UML */
class VueMonCompte {
    public $ado;
    
    public $vueAcceil;
    
    
    
    function affiche_Accueil(){
    	// TODO	
    }
	
}




/* Généré avec GenMyModel à partir d'UML */
class Liste_Client_ADO {
    public $affiche_NouveauClient_ADO;
    
    public $vue;
    
    public $clients;
    
    
    
    function ajouterClient_ADO(){
    	// TODO	
    }
	
    
    function supprimerClient_ADO(){
    	// TODO	
    }
	
    
    function modifierClient_ADO(){
    	// TODO	
    }
	
    
    function affiche_InfoClient_ADO(){
    	// TODO	
    }
	
    
    function affiche_Accueil_ADO(){
    	// TODO	
    }
	
}




/* Généré avec GenMyModel à partir d'UML */
class Nouveaux_Clients_ADO {
    public $vue;
    
    public $clients;
    
    
    
    function valider_Compte_ADO(){
    	// TODO	
    }
	
    
    function affiche_InfoClient_ADO(){
    	// TODO	
    }
	
}




/* Généré avec GenMyModel à partir d'UML */
class Liste_Produit_ADO {
    public $vue;
    
    public $produits;
    
    
    
    function affiche_InfoProduit_ADO(){
    	// TODO	
    }
	
    
    function ajouterProduit_ADO($produit){
    	// TODO	
    }
	
    
    function affiche_Accueil_ADO(){
    	// TODO	
    }
	
    
    function modifierProduit_ADO(){
    	// TODO	
    }
	
    
    function supprimerProduit($id){
    	// TODO	
    }
	
    
    function emprunterProduit($id){
    	// TODO	
    }
	
    
    function prolongerEmprunt_ADO($id){
    	// TODO	
    }
	
}




/* Généré avec GenMyModel à partir d'UML */
class Info_Produit_ADO {
    public $vue;
    
    public $produit;
    
    
    
    function modifierProduit_ADO(){
    	// TODO	
    }
	
    
    function supprimerProduit_ADO(){
    	// TODO	
    }
	
    
    function emprunterProduit_ADO($idClient){
    	// TODO	
    }
	
    
    function ajouterProduit_ADO(){
    	// TODO	
    }
	
    
    function prolongerEmprunt_ADO(){
    	// TODO	
    }
	
}




/* Généré avec GenMyModel à partir d'UML */
class Mon_Compte_ADO {
    public $vue;
    
    public $client;
    
    
    
    function affiche_Accueil_ADO(){
    	// TODO	
    }
	
}




/* Généré avec GenMyModel à partir d'UML */
class VueInformationClient {
    public $ado;
    
    public $vueListeClient;
    
    
    
    function affiche_ListeClient(){
    	// TODO	
    }
	
}




/* Généré avec GenMyModel à partir d'UML */
class Info_Client_ADO {
    public $vue;
    
    public $client;
    
    
    
    function affiche_ListeCompte_ADO(){
    	// TODO	
    }
	
}




/* Généré avec GenMyModel à partir d'UML */
class Interaction {
    
}




/* Généré avec GenMyModel à partir d'UML */
class Interaction {
    
}




/* Généré avec GenMyModel à partir d'UML */
class Interaction {
    
}




/* Généré avec GenMyModel à partir d'UML */
class Interaction {
    
}




/* Généré avec GenMyModel à partir d'UML */
class Interaction {
    
}




/* Généré avec GenMyModel à partir d'UML */
class Interaction {
    
}




/* Généré avec GenMyModel à partir d'UML */
class Interaction {
    
}




/* Généré avec GenMyModel à partir d'UML */
class VueLogActions {
    public $ado;
    
    public $vueAccueil;
    
    
    
    function affiche_Accueil(){
    	// TODO	
    }
	
    
    function valider_action($id){
    	// TODO	
    }
	
    
    function annuler_action($id){
    	// TODO	
    }
	
}




/* Généré avec GenMyModel à partir d'UML */
class Action_ADO {
    public $vue;
    
    public $acteur;
    
    
    
    function valider_action_ADO(){
    	// TODO	
    }
	
    
    function annuler_action_ADO(){
    	// TODO	
    }
	
}




/* Généré avec GenMyModel à partir d'UML */
class Action {
    public $id;
    
    public $descriptionGeneree;
    
    public $validee;
    
    public $sqlPourAnnulerAction;
    
    
    
    function getId(){
    	// TODO	
    }
	
    
    function getDescription(){
    	// TODO	
    }
	
    
    function setDescription($description){
    	// TODO	
    }
	
    
    function valider($validation){
    	// TODO	
    }
	
    
    function getSql(){
    	// TODO	
    }
	
    
    function setSql($sql){
    	// TODO	
    }
	
}




/* Généré avec GenMyModel à partir d'UML */
class Interaction {
    
}




/* Généré avec GenMyModel à partir d'UML */
class Interaction {
    
}




/* Généré avec GenMyModel à partir d'UML */
class Personne {
    private $id;
    
    private $email;
    
    private $prenom;
    
    private $nom;
    
    private $mdp;
    
    
    
    function getId(){
    	// TODO	
    }
	
    
    function getEmail(){
    	// TODO	
    }
	
    
    function setEmail($login){
    	// TODO	
    }
	
    
    function getNom(){
    	// TODO	
    }
	
    
    function setNom($nom){
    	// TODO	
    }
	
    
    function getMdp(){
    	// TODO	
    }
	
    
    function setMdp($mdp){
    	// TODO	
    }
	
    
    function getPrenom(){
    	// TODO	
    }
	
    
    function setPrenom($nom){
    	// TODO	
    }
	
}




/* Généré avec GenMyModel à partir d'UML */
class VueInscription {
    public $ado;
    
    public $vueAcceuil;
    
    
    
    function affiche_Accueil(){
    	// TODO	
    }
	
    
    function inscription(){
    	// TODO	
    }
	
}




/* Généré avec GenMyModel à partir d'UML */
class Inscription_ADO {
    public $vue;
    
    public $client;
    
    
    
    function affiche_Accueil_ADO(){
    	// TODO	
    }
	
    
    function inscription_ADO(){
    	// TODO	
    }
	
}




/* Généré avec GenMyModel à partir d'UML */
class Interaction {
    
}




/* Généré avec GenMyModel à partir d'UML */
class Interaction {
    
}




/* Généré avec GenMyModel à partir d'UML */
class Interaction {
    
}




/* Généré avec GenMyModel à partir d'UML */
class Recherche {
    public $temes;
    
    public $dateMinimum;
    
    public $dateMaximum;
    
    public $saisieChampsRecherche[];
    
    
}
