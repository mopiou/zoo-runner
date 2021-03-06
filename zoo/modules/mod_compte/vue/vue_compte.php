<?php
/**
 * Created by PhpStorm.
 * User: Omar
 * Date: 25/10/2014
 * Time: 13:20
 */
if (! defined ('TEST_INCLUDE'))
    die ("Vous ne pouvez pas accéder directement à ce fichier");


class VueCompte
{

    public static function erreurPasConnecte()
    {
        ?>
        <div class="alert alert-danger erreur" role="alert">ERREUR : Vous n'êtes pas connecté, vous allez être redirigé vers la page de connexion.</br>
            <a href="index.php?module=connexion">Cliquez ici si vous n'êtes pas redirigé.</a>
        </div>
    <?php
    }

    public static function afficherInformations(){
        ?>
        <div class="row-centered">		
		<div class="col-xs-10 col-centered annonce">
		<h2>Informations personnelles</h2>
		<div>
		    <h3><?php echo $_SESSION['pseudo'];?></h3></br>
		    <span>Dernière connexion : <em><?php echo $_SESSION['dateDerniereConnexion'];?></em></span></br>
		    <span>Adresse email : <?php echo $_SESSION['email'];?></span></br>
		    <span>Votre score de confiance <?php echo $_SESSION['confiance'];?></span></br>

		    </hr>
				 

			<form class="form-horizontal" method="post" action="index.php?module=compte&action=mesinfos&do=modifier">
				<fieldset>
		
				<!-- Form Name -->
				<legend>Modifier ses informations personnelles</legend>
				<span>Pour modifier vos informations, veuillez entrer votre mot de passe. Si vous ne désirez pas modifier votre mot de passe, laissez le champ <em>"Nouveau mot de passe"</em> vide.</span>
		
				<!-- Password input-->
				<div class="control-group">
				  <label class="control-label" for="mdp">Mot de passe</label>
				  <div class="controls">
				    <input id="password" name="password" placeholder="" class="input-xxlarge" required="" type="password">
				    
				  </div>
				</div>
				<div class="control-group">
				  <label class="control-label" for="mdp">Nouveau mot de passe</label>
				  <div class="controls">
				    <input id="newpassword" name="newpassword" placeholder="" class="input-xxlarge" required="" type="password">
				    
				  </div>
				</div>
		
				<!-- Button -->
				<div class="control-group">
				  <label class="control-label" for="submit"></label>
				  <div class="controls">
				    <button id="submit" type="submit"name="submit" class="btn btn-primary">Modifier ses informations</button>
				  </div>
				</div>
		
				</fieldset>
			</form>
			</div>
        	</div>
        </div>


        <?php
        /*
        $_SESSION['id_user'] = $query->id_user;
        $_SESSION['pseudo'] = $query -> pseudo;
        $_SESSION['email'] = $query->email;
        $_SESSION['confiance'] = $query->confiance;
        $_SESSION['dateDerniereConnexion'] = $query->dateDerniereConnexion;
        */
    }
}
