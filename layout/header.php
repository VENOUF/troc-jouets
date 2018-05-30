<?php
require_once 'lib/functions.php';
$utilisateur = currentUser();
?>
<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="utf-8">
        <meta name="description" content="Troc Jouets-La communauté d'échange de jouets.">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>TROC JOUETS | <?php echo $title ?> </title>
        <link rel="shortcut icon" type="image/x-icon" href="./favicon.ico" />
        <link href="https://fonts.googleapis.com/css?family=Pompiere" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="./css/jquery.sidr.light.min.css">
        <link rel="stylesheet" href="./css/owl.carousel.min.css">
        <link rel="stylesheet" href="./css/styles.css">
    </head>

    <body class="page-home">



        <!--  HEADER   -->

        <header>

            <!--  Top nav  -->

            <div id="top-nav">
                <div class="container top-nav">

                    <nav class="social-nav nav-left">
                        <ul>
                            <li>
                                <a href="#" title="Facebook">
                                    <i class="fa fa-facebook-square" aria-hidden="true"></i>Facebook</a>
                            </li>
                            <li>
                                <a href="#" title="Instagram">
                                    <i class="fa fa-instagram" aria-hidden="true"></i>Instagram</a>
                            </li>
                            <li>
                                <a href="#" title="Pinterest">
                                    <i class="fa fa-pinterest-square" aria-hidden="true"></i>Pinterest</a>
                            </li>
                            <li>
                                <a href="#" title="Twitter">
                                    <i class="fa fa-twitter-square" aria-hidden="true"></i>Twitter</a>
                            </li>
                        </ul>
                    </nav>


                    <div class="connect-top">
                        <?php if (!isset($utilisateur["id"])) : ?>
                            <a href="connection.php" class="connection">Login</a>
                        <?php else: ?>
                            <a href="#">Mon Compte</a>
                        <?php endif; ?>

                    </div>


                    <nav class="nav-right">
                        <ul>
                            <li>
                                <a href="compte.php" class="compte" title="Mon espace membre">Mon compte</a>
                            </li>
                            <li>
                                <a href="recherche.php" class="recherche" title="Rechercher">Rechercher</a>
                            </li>
                        </ul>
                    </nav>

                </div>
            </div>

            <!--  Logo  -->

            <div class="container logo">

                <div id="logo">
                    <a href="./index.php" title="Retour à l'accueil">
                        <img src="./images/logotype.svg">
                    </a>
                </div>

                <div class="baseline">
                    <h4>échangez vos jouets</h4>
                </div>

            </div>


            <!--  Navigation principale   -->
            <?php getMenu() ?>



        </header>


        <!--  MAIN-->

        <main>