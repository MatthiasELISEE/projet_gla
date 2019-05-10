<?php

/* Generated from GenMyModel */

class Salarie {
    private $estManager;
    
    
	public function getDroitManager(){
		// TODO	
	}
	public function setDroitManager($manager){
		// TODO	
	}
}


<?php

/* Generated from GenMyModel */

class Client {
    private $soldeClient;
    
    private $adresseClient;
    
    private $compteValide;
    
    public $reservations;
    
    public $emprunts;
    
    
	public function getAdresseClient(){
		// TODO	
	}
	public function setAdresseClient($adresse){
		// TODO	
	}
	public function getCompteValide(){
		// TODO	
	}
	public function setCompteValide($validation){
		// TODO	
	}
	public function getSoldeClient(){
		// TODO	
	}
	public function setSoldeClient(){
		// TODO	
	}
}


<?php

/* Generated from GenMyModel */

class Emprunt {
    private $idEmprunt;
    
    private $idClient;
    
    private $idDocument;
    
    private $date_emprunt;
    
    private $date_retour;
    
    public $produit;
    
    
	public function getIdEmprunt(){
		// TODO	
	}
	public function getIdClient(){
		// TODO	
	}
	public function getIdDocument(){
		// TODO	
	}
	public function setIdDocument(){
		// TODO	
	}
	public function getDate_emprunt(){
		// TODO	
	}
	public function setDate_emprunt(){
		// TODO	
	}
	public function getDate_retour(){
		// TODO	
	}
	public function setDate_retour(){
		// TODO	
	}
}


<?php

/* Generated from GenMyModel */

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
    
    
	public function getIdProd(){
		// TODO	
	}
	public function setIdProd(){
		// TODO	
	}
	public function getNomProd(){
		// TODO	
	}
	public function setNomProd(){
		// TODO	
	}
	public function getAuteur(){
		// TODO	
	}
	public function setAuteur(){
		// TODO	
	}
	public function getEtat(){
		// TODO	
	}
	public function setEtat(){
		// TODO	
	}
	public function getCategorie(){
		// TODO	
	}
	public function setCategorie(){
		// TODO	
	}
	public function getEdition(){
		// TODO	
	}
	public function setEdition(){
		// TODO	
	}
	public function getDatePublic(){
		// TODO	
	}
	public function setDatePublic(){
		// TODO	
	}
	public function getQuantite(){
		// TODO	
	}
	public function setQuantite(){
		// TODO	
	}
	public function getNoteDocument(){
		// TODO	
	}
	public function setNoteDocument(){
		// TODO	
	}
	public function getDescription(){
		// TODO	
	}
	public function setDescription(){
		// TODO	
	}
	public function getEmprunts(){
		// TODO	
	}
	public function getReservations(){
		// TODO	
	}
}


<?php

/* Generated from GenMyModel */

class Reservation {
    private $idReservation;
    
    private $idDocument;
    
    private $idAbonne;
    
    private $dateReservation;
    
    
	public function getIdReservation(){
		// TODO	
	}
	public function getIdDocument(){
		// TODO	
	}
	public function getIdAbonne(){
		// TODO	
	}
	public function setIdAbonne($id){
		// TODO	
	}
	public function getDateReservation(){
		// TODO	
	}
	public function setDateReservation($date){
		// TODO	
	}
}


<?php

/* Generated from GenMyModel */

class Interaction {
    
}


<?php

/* Generated from GenMyModel */

class Interaction {
    
}


<?php

/* Generated from GenMyModel */

class Interaction {
    
}


<?php

/* Generated from GenMyModel */

class Interaction {
    
}


<?php

/* Generated from GenMyModel */

class Interaction {
    
}


<?php

/* Generated from GenMyModel */

class Interaction {
    
}


<?php

/* Generated from GenMyModel */

class Interaction {
    
}


<?php

/* Generated from GenMyModel */

class Interaction {
    
}


<?php

/* Generated from GenMyModel */

class Interaction {
    
}


<?php

/* Generated from GenMyModel */

class Interaction {
    
}


<?php

/* Generated from GenMyModel */

class Interaction {
    
}


<?php

/* Generated from GenMyModel */

class Interaction {
    
}


<?php

/* Generated from GenMyModel */

class Interaction {
    
}


<?php

/* Generated from GenMyModel */

class Interaction {
    
}


<?php

/* Generated from GenMyModel */

class Interaction {
    
}


<?php

/* Generated from GenMyModel */

class Interaction {
    
}


<?php

/* Generated from GenMyModel */

class StateMachine {
    
}


<?php

/* Generated from GenMyModel */

class Interaction {
    
}


<?php

/* Generated from GenMyModel */

class VueConnexion {
    public $login;
    
    public $mdp;
    
    public $vueAccueil;
    
    public $ado;
    
    
	public function checkLogin(){
		// TODO	
	}
	public function checkMdp(){
		// TODO	
	}
	public function rentre id et mdp(){
		// TODO	
	}
}


<?php

/* Generated from GenMyModel */

class VueAccueil {
    public $ado;
    
    public $vueInscription;
    
    public $vueListeProduit;
    
    public $vueListeClient;
    
    public $vueListeSalarie;
    
    
	public function affiche_listeSalarie(){
		// TODO	
	}
	public function affiche_ListeSalarié(){
		// TODO	
	}
	public function clique sur "Liste Produit"(){
		// TODO	
	}
	public function affiche_MonCompte(){
		// TODO	
	}
	public function affiche_logActions(){
		// TODO	
	}
	public function rechercheProduit(){
		// TODO	
	}
	public function rechercheSalarie(){
		// TODO	
	}
	public function affiche_Inscription(){
		// TODO	
	}
	public function affiche_ListeClient(){
		// TODO	
	}
}


<?php

/* Generated from GenMyModel */

class VueListeSalarie {
    public $ado;
    
    public $vueAccueil;
    
    
	public function rechercheSalarie(){
		// TODO	
	}
	public function affiche_infoSalarie($id){
		// TODO	
	}
	public function affiche_Accueil(){
		// TODO	
	}
}


<?php

/* Generated from GenMyModel */

class VueInformationSalarié {
    public $vueListeSalarie;
    
    
	public function supprimerSalarie(){
		// TODO	
	}
	public function affiche_ListeSalarie(){
		// TODO	
	}
}


<?php

/* Generated from GenMyModel */

class Connexion_ADO {
    public $vue;
    
    public $personneConnectee;
    
    
	public function identification(){
		// TODO	
	}
}


<?php

/* Generated from GenMyModel */

class Accueil_ADO {
    public $vue;
    
    
	public function affiche_ListeSalarie_ADO(){
		// TODO	
	}
	public function affiche_ListeClient_ADO(){
		// TODO	
	}
	public function affiche_ListeProduit(){
		// TODO	
	}
	public function affiche_MonCompte_ADO(){
		// TODO	
	}
	public function rechercheProduit_ADO(){
		// TODO	
	}
	public function rechercheCompte_ADO(){
		// TODO	
	}
	public function affiche_Inscription_ADO(){
		// TODO	
	}
}


<?php

/* Generated from GenMyModel */

class Liste_Salarié_ADO {
    public $salaries;
    
    public $recherche;
    
    public $vue;
    
    
	public function affiche_infoSalarie_ADO($id){
		// TODO	
	}
	public function recherche(){
		// TODO	
	}
}


<?php

/* Generated from GenMyModel */

class Info_Salarié_ADO {
    public $vue;
    
    public $salarie;
    
    
	public function supprimerSalarie_ADO(){
		// TODO	
	}
	public function affiche_ListeSalarie_ADO(){
		// TODO	
	}
}


<?php

/* Generated from GenMyModel */

class VueListeClient {
    public $ado;
    
    public $vueAccueil;
    
    
	public function affiche_NouveauxClient(){
		// TODO	
	}
	public function affiche_Accueil(){
		// TODO	
	}
	public function ajouterClient(){
		// TODO	
	}
	public function modifierClient(){
		// TODO	
	}
	public function supprimerClient(){
		// TODO	
	}
	public function affiche_InfoClient($id){
		// TODO	
	}
}


<?php

/* Generated from GenMyModel */

class VueNouveauxClient {
    public $ado;
    
    public $vueListeClient;
    
    
	public function affiche_ListeClient(){
		// TODO	
	}
	public function valider_client(){
		// TODO	
	}
	public function affiche_InfoClient($id){
		// TODO	
	}
}


<?php

/* Generated from GenMyModel */

class VueListeProduit {
    public $ado;
    
    public $vueInfoProduit;
    
    public $vueAccueil;
    
    
	public function affiche_Info_Produit($id){
		// TODO	
	}
	public function affiche_Accueil(){
		// TODO	
	}
	public function ajouterProduit($produit){
		// TODO	
	}
	public function supprimerProduit($id){
		// TODO	
	}
	public function modifierProduit(){
		// TODO	
	}
	public function emprunterProduit($id){
		// TODO	
	}
	public function prolongerEmprunt($id){
		// TODO	
	}
}


<?php

/* Generated from GenMyModel */

class VueInfoProduit {
    public $ado;
    
    public $vueListeProduit;
    
    
	public function affiche_ListeProduit(){
		// TODO	
	}
	public function supprimerProduit(){
		// TODO	
	}
	public function modifierProduit(){
		// TODO	
	}
	public function emprunterProduit(){
		// TODO	
	}
	public function ajouterProduit(){
		// TODO	
	}
}


<?php

/* Generated from GenMyModel */

class VueMonCompte {
    public $ado;
    
    public $vueAcceil;
    
    
	public function affiche_Accueil(){
		// TODO	
	}
}


<?php

/* Generated from GenMyModel */

class Liste_Client_ADO {
    public $affiche_NouveauClient_ADO;
    
    public $vue;
    
    public $clients;
    
    
	public function ajouterClient_ADO(){
		// TODO	
	}
	public function supprimerClient_ADO(){
		// TODO	
	}
	public function modifierClient_ADO(){
		// TODO	
	}
	public function affiche_InfoClient_ADO(){
		// TODO	
	}
	public function affiche_Accueil_ADO(){
		// TODO	
	}
}


<?php

/* Generated from GenMyModel */

class Nouveaux_Clients_ADO {
    public $vue;
    
    public $clients;
    
    
	public function valider_Compte_ADO(){
		// TODO	
	}
	public function affiche_InfoClient_ADO(){
		// TODO	
	}
}


<?php

/* Generated from GenMyModel */

class Liste_Produit_ADO {
    public $vue;
    
    public $produits;
    
    
	public function affiche_InfoProduit_ADO(){
		// TODO	
	}
	public function ajouterProduit_ADO($produit){
		// TODO	
	}
	public function affiche_Accueil_ADO(){
		// TODO	
	}
	public function modifierProduit_ADO(){
		// TODO	
	}
	public function supprimerProduit($id){
		// TODO	
	}
	public function emprunterProduit($id){
		// TODO	
	}
	public function prolongerEmprunt_ADO($id){
		// TODO	
	}
}


<?php

/* Generated from GenMyModel */

class Info_Produit_ADO {
    public $vue;
    
    public $produit;
    
    
	public function modifierProduit_ADO(){
		// TODO	
	}
	public function supprimerProduit_ADO(){
		// TODO	
	}
	public function emprunterProduit_ADO($idClient){
		// TODO	
	}
	public function ajouterProduit_ADO(){
		// TODO	
	}
	public function prolongerEmprunt_ADO(){
		// TODO	
	}
}


<?php

/* Generated from GenMyModel */

class Mon_Compte_ADO {
    public $vue;
    
    public $client;
    
    
	public function affiche_Accueil_ADO(){
		// TODO	
	}
}


<?php

/* Generated from GenMyModel */

class VueInformationClient {
    public $ado;
    
    public $vueListeClient;
    
    
	public function affiche_ListeClient(){
		// TODO	
	}
}


<?php

/* Generated from GenMyModel */

class Info_Client_ADO {
    public $vue;
    
    public $client;
    
    
	public function affiche_ListeCompte_ADO(){
		// TODO	
	}
}


<?php

/* Generated from GenMyModel */

class Interaction {
    
}


<?php

/* Generated from GenMyModel */

class Interaction {
    
}


<?php

/* Generated from GenMyModel */

class Interaction {
    
}


<?php

/* Generated from GenMyModel */

class Interaction {
    
}


<?php

/* Generated from GenMyModel */

class Interaction {
    
}


<?php

/* Generated from GenMyModel */

class Interaction {
    
}


<?php

/* Generated from GenMyModel */

class Interaction {
    
}


<?php

/* Generated from GenMyModel */

class VueLogActions {
    public $ado;
    
    public $vueAccueil;
    
    
	public function affiche_Accueil(){
		// TODO	
	}
	public function valider_action($id){
		// TODO	
	}
	public function annuler_action($id){
		// TODO	
	}
}


<?php

/* Generated from GenMyModel */

class Action_ADO {
    public $vue;
    
    public $acteur;
    
    
	public function valider_action_ADO(){
		// TODO	
	}
	public function annuler_action_ADO(){
		// TODO	
	}
}


<?php

/* Generated from GenMyModel */

class Action {
    public $id;
    
    public $descriptionGeneree;
    
    public $validee;
    
    public $sqlPourAnnulerAction;
    
    
	public function getId(){
		// TODO	
	}
	public function getDescription(){
		// TODO	
	}
	public function setDescription($description){
		// TODO	
	}
	public function valider($validation){
		// TODO	
	}
	public function getSql(){
		// TODO	
	}
	public function setSql($sql){
		// TODO	
	}
}


<?php

/* Generated from GenMyModel */

class Interaction {
    
}


<?php

/* Generated from GenMyModel */

class Interaction {
    
}


<?php

/* Generated from GenMyModel */

class Personne {
    private $id;
    
    private $email;
    
    private $prenom;
    
    private $nom;
    
    private $mdp;
    
    
	public function getId(){
		// TODO	
	}
	public function getEmail(){
		// TODO	
	}
	public function setEmail($login){
		// TODO	
	}
	public function getNom(){
		// TODO	
	}
	public function setNom($nom){
		// TODO	
	}
	public function getMdp(){
		// TODO	
	}
	public function setMdp($mdp){
		// TODO	
	}
	public function getPrenom(){
		// TODO	
	}
	public function setPrenom($nom){
		// TODO	
	}
}


<?php

/* Generated from GenMyModel */

class VueInscription {
    public $ado;
    
    public $vueAcceuil;
    
    
	public function affiche_Accueil(){
		// TODO	
	}
	public function inscription(){
		// TODO	
	}
}


<?php

/* Generated from GenMyModel */

class Inscription_ADO {
    public $vue;
    
    public $client;
    
    
	public function affiche_Accueil_ADO(){
		// TODO	
	}
	public function inscription_ADO(){
		// TODO	
	}
}


<?php

/* Generated from GenMyModel */

class Interaction {
    
}


<?php

/* Generated from GenMyModel */

class Interaction {
    
}


<?php

/* Generated from GenMyModel */

class Interaction {
    
}


<?php

/* Generated from GenMyModel */

class Recherche {
    public $temes;
    
    public $dateMinimum;
    
    public $dateMaximum;
    
    public $saisieChampsRecherche[];
    
    
}


<?php

/* Généré avec GenMyModel à partir d'UML */
class Salarie {
    private $estManager;
    
    
    
	public function getDroitManager(){
		// TODO	
	}
	
    
	public function setDroitManager($manager){
		// TODO	
	}
	
}


<?php

/* Généré avec GenMyModel à partir d'UML */
class Client {
    private $soldeClient;
    
    private $adresseClient;
    
    private $compteValide;
    
    public $reservations;
    
    public $emprunts;
    
    
    
	public function getAdresseClient(){
		// TODO	
	}
	
    
	public function setAdresseClient($adresse){
		// TODO	
	}
	
    
	public function getCompteValide(){
		// TODO	
	}
	
    
	public function setCompteValide($validation){
		// TODO	
	}
	
    
	public function getSoldeClient(){
		// TODO	
	}
	
    
	public function setSoldeClient(){
		// TODO	
	}
	
}


<?php

/* Généré avec GenMyModel à partir d'UML */
class Emprunt {
    private $idEmprunt;
    
    private $idClient;
    
    private $idDocument;
    
    private $date_emprunt;
    
    private $date_retour;
    
    public $produit;
    
    
    
	public function getIdEmprunt(){
		// TODO	
	}
	
    
	public function getIdClient(){
		// TODO	
	}
	
    
	public function getIdDocument(){
		// TODO	
	}
	
    
	public function setIdDocument(){
		// TODO	
	}
	
    
	public function getDate_emprunt(){
		// TODO	
	}
	
    
	public function setDate_emprunt(){
		// TODO	
	}
	
    
	public function getDate_retour(){
		// TODO	
	}
	
    
	public function setDate_retour(){
		// TODO	
	}
	
}


<?php

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
    
    
    
	public function getIdProd(){
		// TODO	
	}
	
    
	public function setIdProd(){
		// TODO	
	}
	
    
	public function getNomProd(){
		// TODO	
	}
	
    
	public function setNomProd(){
		// TODO	
	}
	
    
	public function getAuteur(){
		// TODO	
	}
	
    
	public function setAuteur(){
		// TODO	
	}
	
    
	public function getEtat(){
		// TODO	
	}
	
    
	public function setEtat(){
		// TODO	
	}
	
    
	public function getCategorie(){
		// TODO	
	}
	
    
	public function setCategorie(){
		// TODO	
	}
	
    
	public function getEdition(){
		// TODO	
	}
	
    
	public function setEdition(){
		// TODO	
	}
	
    
	public function getDatePublic(){
		// TODO	
	}
	
    
	public function setDatePublic(){
		// TODO	
	}
	
    
	public function getQuantite(){
		// TODO	
	}
	
    
	public function setQuantite(){
		// TODO	
	}
	
    
	public function getNoteDocument(){
		// TODO	
	}
	
    
	public function setNoteDocument(){
		// TODO	
	}
	
    
	public function getDescription(){
		// TODO	
	}
	
    
	public function setDescription(){
		// TODO	
	}
	
    
	public function getEmprunts(){
		// TODO	
	}
	
    
	public function getReservations(){
		// TODO	
	}
	
}


<?php

/* Généré avec GenMyModel à partir d'UML */
class Reservation {
    private $idReservation;
    
    private $idDocument;
    
    private $idAbonne;
    
    private $dateReservation;
    
    
    
	public function getIdReservation(){
		// TODO	
	}
	
    
	public function getIdDocument(){
		// TODO	
	}
	
    
	public function getIdAbonne(){
		// TODO	
	}
	
    
	public function setIdAbonne($id){
		// TODO	
	}
	
    
	public function getDateReservation(){
		// TODO	
	}
	
    
	public function setDateReservation($date){
		// TODO	
	}
	
}


<?php

/* Généré avec GenMyModel à partir d'UML */
class Interaction {
    
}


<?php

/* Généré avec GenMyModel à partir d'UML */
class Interaction {
    
}


<?php

/* Généré avec GenMyModel à partir d'UML */
class Interaction {
    
}


<?php

/* Généré avec GenMyModel à partir d'UML */
class Interaction {
    
}


<?php

/* Généré avec GenMyModel à partir d'UML */
class Interaction {
    
}


<?php

/* Généré avec GenMyModel à partir d'UML */
class Interaction {
    
}


<?php

/* Généré avec GenMyModel à partir d'UML */
class Interaction {
    
}


<?php

/* Généré avec GenMyModel à partir d'UML */
class Interaction {
    
}


<?php

/* Généré avec GenMyModel à partir d'UML */
class Interaction {
    
}


<?php

/* Généré avec GenMyModel à partir d'UML */
class Interaction {
    
}


<?php

/* Généré avec GenMyModel à partir d'UML */
class Interaction {
    
}


<?php

/* Généré avec GenMyModel à partir d'UML */
class Interaction {
    
}


<?php

/* Généré avec GenMyModel à partir d'UML */
class Interaction {
    
}


<?php

/* Généré avec GenMyModel à partir d'UML */
class Interaction {
    
}


<?php

/* Généré avec GenMyModel à partir d'UML */
class Interaction {
    
}


<?php

/* Généré avec GenMyModel à partir d'UML */
class Interaction {
    
}


<?php

/* Généré avec GenMyModel à partir d'UML */
class StateMachine {
    
}


<?php

/* Généré avec GenMyModel à partir d'UML */
class Interaction {
    
}


<?php

/* Généré avec GenMyModel à partir d'UML */
class VueConnexion {
    public $login;
    
    public $mdp;
    
    public $vueAccueil;
    
    public $ado;
    
    
    
	public function checkLogin(){
		// TODO	
	}
	
    
	public function checkMdp(){
		// TODO	
	}
	
    
	public function rentre id et mdp(){
		// TODO	
	}
	
}


<?php

/* Généré avec GenMyModel à partir d'UML */
class VueAccueil {
    public $ado;
    
    public $vueInscription;
    
    public $vueListeProduit;
    
    public $vueListeClient;
    
    public $vueListeSalarie;
    
    
    
	public function affiche_listeSalarie(){
		// TODO	
	}
	
    
	public function affiche_ListeSalarié(){
		// TODO	
	}
	
    
	public function clique sur "Liste Produit"(){
		// TODO	
	}
	
    
	public function affiche_MonCompte(){
		// TODO	
	}
	
    
	public function affiche_logActions(){
		// TODO	
	}
	
    
	public function rechercheProduit(){
		// TODO	
	}
	
    
	public function rechercheSalarie(){
		// TODO	
	}
	
    
	public function affiche_Inscription(){
		// TODO	
	}
	
    
	public function affiche_ListeClient(){
		// TODO	
	}
	
}


<?php

/* Généré avec GenMyModel à partir d'UML */
class VueListeSalarie {
    public $ado;
    
    public $vueAccueil;
    
    
    
	public function rechercheSalarie(){
		// TODO	
	}
	
    
	public function affiche_infoSalarie($id){
		// TODO	
	}
	
    
	public function affiche_Accueil(){
		// TODO	
	}
	
}


<?php

/* Généré avec GenMyModel à partir d'UML */
class VueInformationSalarié {
    public $vueListeSalarie;
    
    
    
	public function supprimerSalarie(){
		// TODO	
	}
	
    
	public function affiche_ListeSalarie(){
		// TODO	
	}
	
}


<?php

/* Généré avec GenMyModel à partir d'UML */
class Connexion_ADO {
    public $vue;
    
    public $personneConnectee;
    
    
    
	public function identification(){
		// TODO	
	}
	
}


<?php

/* Généré avec GenMyModel à partir d'UML */
class Accueil_ADO {
    public $vue;
    
    
    
	public function affiche_ListeSalarie_ADO(){
		// TODO	
	}
	
    
	public function affiche_ListeClient_ADO(){
		// TODO	
	}
	
    
	public function affiche_ListeProduit(){
		// TODO	
	}
	
    
	public function affiche_MonCompte_ADO(){
		// TODO	
	}
	
    
	public function rechercheProduit_ADO(){
		// TODO	
	}
	
    
	public function rechercheCompte_ADO(){
		// TODO	
	}
	
    
	public function affiche_Inscription_ADO(){
		// TODO	
	}
	
}


<?php

/* Généré avec GenMyModel à partir d'UML */
class Liste_Salarié_ADO {
    public $salaries;
    
    public $recherche;
    
    public $vue;
    
    
    
	public function affiche_infoSalarie_ADO($id){
		// TODO	
	}
	
    
	public function recherche(){
		// TODO	
	}
	
}


<?php

/* Généré avec GenMyModel à partir d'UML */
class Info_Salarié_ADO {
    public $vue;
    
    public $salarie;
    
    
    
	public function supprimerSalarie_ADO(){
		// TODO	
	}
	
    
	public function affiche_ListeSalarie_ADO(){
		// TODO	
	}
	
}


<?php

/* Généré avec GenMyModel à partir d'UML */
class VueListeClient {
    public $ado;
    
    public $vueAccueil;
    
    
    
	public function affiche_NouveauxClient(){
		// TODO	
	}
	
    
	public function affiche_Accueil(){
		// TODO	
	}
	
    
	public function ajouterClient(){
		// TODO	
	}
	
    
	public function modifierClient(){
		// TODO	
	}
	
    
	public function supprimerClient(){
		// TODO	
	}
	
    
	public function affiche_InfoClient($id){
		// TODO	
	}
	
}


<?php

/* Généré avec GenMyModel à partir d'UML */
class VueNouveauxClient {
    public $ado;
    
    public $vueListeClient;
    
    
    
	public function affiche_ListeClient(){
		// TODO	
	}
	
    
	public function valider_client(){
		// TODO	
	}
	
    
	public function affiche_InfoClient($id){
		// TODO	
	}
	
}


<?php

/* Généré avec GenMyModel à partir d'UML */
class VueListeProduit {
    public $ado;
    
    public $vueInfoProduit;
    
    public $vueAccueil;
    
    
    
	public function affiche_Info_Produit($id){
		// TODO	
	}
	
    
	public function affiche_Accueil(){
		// TODO	
	}
	
    
	public function ajouterProduit($produit){
		// TODO	
	}
	
    
	public function supprimerProduit($id){
		// TODO	
	}
	
    
	public function modifierProduit(){
		// TODO	
	}
	
    
	public function emprunterProduit($id){
		// TODO	
	}
	
    
	public function prolongerEmprunt($id){
		// TODO	
	}
	
}


<?php

/* Généré avec GenMyModel à partir d'UML */
class VueInfoProduit {
    public $ado;
    
    public $vueListeProduit;
    
    
    
	public function affiche_ListeProduit(){
		// TODO	
	}
	
    
	public function supprimerProduit(){
		// TODO	
	}
	
    
	public function modifierProduit(){
		// TODO	
	}
	
    
	public function emprunterProduit(){
		// TODO	
	}
	
    
	public function ajouterProduit(){
		// TODO	
	}
	
}


<?php

/* Généré avec GenMyModel à partir d'UML */
class VueMonCompte {
    public $ado;
    
    public $vueAcceil;
    
    
    
	public function affiche_Accueil(){
		// TODO	
	}
	
}


<?php

/* Généré avec GenMyModel à partir d'UML */
class Liste_Client_ADO {
    public $affiche_NouveauClient_ADO;
    
    public $vue;
    
    public $clients;
    
    
    
	public function ajouterClient_ADO(){
		// TODO	
	}
	
    
	public function supprimerClient_ADO(){
		// TODO	
	}
	
    
	public function modifierClient_ADO(){
		// TODO	
	}
	
    
	public function affiche_InfoClient_ADO(){
		// TODO	
	}
	
    
	public function affiche_Accueil_ADO(){
		// TODO	
	}
	
}


<?php

/* Généré avec GenMyModel à partir d'UML */
class Nouveaux_Clients_ADO {
    public $vue;
    
    public $clients;
    
    
    
	public function valider_Compte_ADO(){
		// TODO	
	}
	
    
	public function affiche_InfoClient_ADO(){
		// TODO	
	}
	
}


<?php

/* Généré avec GenMyModel à partir d'UML */
class Liste_Produit_ADO {
    public $vue;
    
    public $produits;
    
    
    
	public function affiche_InfoProduit_ADO(){
		// TODO	
	}
	
    
	public function ajouterProduit_ADO($produit){
		// TODO	
	}
	
    
	public function affiche_Accueil_ADO(){
		// TODO	
	}
	
    
	public function modifierProduit_ADO(){
		// TODO	
	}
	
    
	public function supprimerProduit($id){
		// TODO	
	}
	
    
	public function emprunterProduit($id){
		// TODO	
	}
	
    
	public function prolongerEmprunt_ADO($id){
		// TODO	
	}
	
}


<?php

/* Généré avec GenMyModel à partir d'UML */
class Info_Produit_ADO {
    public $vue;
    
    public $produit;
    
    
    
	public function modifierProduit_ADO(){
		// TODO	
	}
	
    
	public function supprimerProduit_ADO(){
		// TODO	
	}
	
    
	public function emprunterProduit_ADO($idClient){
		// TODO	
	}
	
    
	public function ajouterProduit_ADO(){
		// TODO	
	}
	
    
	public function prolongerEmprunt_ADO(){
		// TODO	
	}
	
}


<?php

/* Généré avec GenMyModel à partir d'UML */
class Mon_Compte_ADO {
    public $vue;
    
    public $client;
    
    
    
	public function affiche_Accueil_ADO(){
		// TODO	
	}
	
}


<?php

/* Généré avec GenMyModel à partir d'UML */
class VueInformationClient {
    public $ado;
    
    public $vueListeClient;
    
    
    
	public function affiche_ListeClient(){
		// TODO	
	}
	
}


<?php

/* Généré avec GenMyModel à partir d'UML */
class Info_Client_ADO {
    public $vue;
    
    public $client;
    
    
    
	public function affiche_ListeCompte_ADO(){
		// TODO	
	}
	
}


<?php

/* Généré avec GenMyModel à partir d'UML */
class Interaction {
    
}


<?php

/* Généré avec GenMyModel à partir d'UML */
class Interaction {
    
}


<?php

/* Généré avec GenMyModel à partir d'UML */
class Interaction {
    
}


<?php

/* Généré avec GenMyModel à partir d'UML */
class Interaction {
    
}


<?php

/* Généré avec GenMyModel à partir d'UML */
class Interaction {
    
}


<?php

/* Généré avec GenMyModel à partir d'UML */
class Interaction {
    
}


<?php

/* Généré avec GenMyModel à partir d'UML */
class Interaction {
    
}


<?php

/* Généré avec GenMyModel à partir d'UML */
class VueLogActions {
    public $ado;
    
    public $vueAccueil;
    
    
    
	public function affiche_Accueil(){
		// TODO	
	}
	
    
	public function valider_action($id){
		// TODO	
	}
	
    
	public function annuler_action($id){
		// TODO	
	}
	
}


<?php

/* Généré avec GenMyModel à partir d'UML */
class Action_ADO {
    public $vue;
    
    public $acteur;
    
    
    
	public function valider_action_ADO(){
		// TODO	
	}
	
    
	public function annuler_action_ADO(){
		// TODO	
	}
	
}


<?php

/* Généré avec GenMyModel à partir d'UML */
class Action {
    public $id;
    
    public $descriptionGeneree;
    
    public $validee;
    
    public $sqlPourAnnulerAction;
    
    
    
	public function getId(){
		// TODO	
	}
	
    
	public function getDescription(){
		// TODO	
	}
	
    
	public function setDescription($description){
		// TODO	
	}
	
    
	public function valider($validation){
		// TODO	
	}
	
    
	public function getSql(){
		// TODO	
	}
	
    
	public function setSql($sql){
		// TODO	
	}
	
}


<?php

/* Généré avec GenMyModel à partir d'UML */
class Interaction {
    
}


<?php

/* Généré avec GenMyModel à partir d'UML */
class Interaction {
    
}


<?php

/* Généré avec GenMyModel à partir d'UML */
class Personne {
    private $id;
    
    private $email;
    
    private $prenom;
    
    private $nom;
    
    private $mdp;
    
    
    
	public function getId(){
		// TODO	
	}
	
    
	public function getEmail(){
		// TODO	
	}
	
    
	public function setEmail($login){
		// TODO	
	}
	
    
	public function getNom(){
		// TODO	
	}
	
    
	public function setNom($nom){
		// TODO	
	}
	
    
	public function getMdp(){
		// TODO	
	}
	
    
	public function setMdp($mdp){
		// TODO	
	}
	
    
	public function getPrenom(){
		// TODO	
	}
	
    
	public function setPrenom($nom){
		// TODO	
	}
	
}


<?php

/* Généré avec GenMyModel à partir d'UML */
class VueInscription {
    public $ado;
    
    public $vueAcceuil;
    
    
    
	public function affiche_Accueil(){
		// TODO	
	}
	
    
	public function inscription(){
		// TODO	
	}
	
}


<?php

/* Généré avec GenMyModel à partir d'UML */
class Inscription_ADO {
    public $vue;
    
    public $client;
    
    
    
	public function affiche_Accueil_ADO(){
		// TODO	
	}
	
    
	public function inscription_ADO(){
		// TODO	
	}
	
}


<?php

/* Généré avec GenMyModel à partir d'UML */
class Interaction {
    
}


<?php

/* Généré avec GenMyModel à partir d'UML */
class Interaction {
    
}


<?php

/* Généré avec GenMyModel à partir d'UML */
class Interaction {
    
}


<?php

/* Généré avec GenMyModel à partir d'UML */
class Recherche {
    public $temes;
    
    public $dateMinimum;
    
    public $dateMaximum;
    
    public $saisieChampsRecherche[];
    
    
}
