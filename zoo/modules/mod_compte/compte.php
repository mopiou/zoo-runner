<?php
/**
 * Created by PhpStorm.
 * User: Omar
 * Date: 25/10/2014
 * Time: 13:19
 */
	if (! defined ('TEST_INCLUDE'))
        die ("Vous ne pouvez pas accéder directement à ce fichier");


	define("MOD_BASEPATH", "modules/mod_compte/");

	include_once(MOD_BASEPATH."controleur/controleur_compte.php");
	ControleurCompte::compte();


?>
