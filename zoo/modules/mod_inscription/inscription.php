<?php
/**
 * Created by PhpStorm.
 * User: brian
 * Date: 25/10/2014
 * Time: 13:19
 */
	if (! defined ('TEST_INCLUDE'))
        die ("Vous ne pouvez pas accéder directement à ce fichier");


	define("MOD_BASEPATH", "modules/mod_inscription/");

	include_once(MOD_BASEPATH."controleur/controleur_inscription.php");
	ControleurInscription::affichage();
	
	if(isset($_GET['action'])){
	
        switch($_GET['action']){
            case "inscrire" :
                ControleurInscription::ajouterPersonne();
                break;
            default:
                break;
        }
    }

?>
