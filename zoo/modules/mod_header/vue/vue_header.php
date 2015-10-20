<?php
/**
 * Created by PhpStorm.
 * User: bsoufir
 * Date: 25/10/2014
 * Time: 13:20
 */
if (! defined ('TEST_INCLUDE'))
    die ("Vous ne pouvez pas accéder directement à ce fichier");


class VueHeader{
    public static function affichageBanniere(){
        echo "
            <head><h1>Zoo runner</h1></head>
            ";
    }

    public static function affichageNavigateurNonConnecte(){
        ?>
        <nav class="navbar navbar-default" role="navigation">
            <div class="container-fluid">

                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Zoo runner</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Zoo runner</a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li ><a href="index.php?module=connexion">Connexion</a></li>

                        <li ><a href="index.php?module=inscription">Inscription</a></li>

                    </ul>


                </div>


            </div>
        </nav>
    <?php
    }

    public static function affichageNavigateurConnecte($id, $pseudonyme){
        ?>
        <nav class="navbar navbar-default" role="navigation">
            <div class="container-fluid">

                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Zoo runner</a>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index.php?module=alerte&action=annonces">Accueil Compte</a></li>
                        <!--<li><a href="index.php?module=alerte&action=formpublier">Ajouter une carte</a></li>-->

			<li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Activités <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="index.php?module=compte&action=mesalertes">Mes Infos</a></li>
                                <li><a href="index.php?module=compte&action=mesinfos">Mes Carte</a></li>
                                <li class="divider"></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Portefeuille <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="index.php?module=alerte&action=formpublier">Ajouter Carte </a></li>
                                <li><a href="#">Ajouter Compte</a></li>
                                <li class="divider"></li>
                            </ul>
                        </li>
                        
                        <li><a href="index.php?module=connexion&action=disconnect">Deconnexion</a></li>
                    </ul>


                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
    <?php
    }
}
?>
