<?php
require_once 'lib/functions.php';
require_once 'model/database.php';

// Déclaration des variables


getHeader("Accueil");

?>

    <section id="troquer">

      <h2>Mon compte</h2>



      <div id="connection-inscription-form" class="container">



        <div class="form">
          <div class="picto">
            <img src="./images/picto-connection.svg" alt="">

          </div>
          <label for="connection">Vous êtes déjà membres, connectez-vous !</label>

          <form class="" action="index.html" method="post">
            <input type="text" name="e-mail" placeholder="E-Mail">
            <input type="password" name="mdp" placeholder="Mot de passe">
            <button type="submit" name="submit">Se connecter</button>
          </form>
        </div>


        <div class="form">



          <div class="picto">
            <img src="./images/picto-inscription.svg" alt="">

          </div>
          <label for="inscription">Sinon, inscrivez-vous vite !</label>

          <form class="inscription" action="index.html" method="post">
            <input type="text" name="e-mail" placeholder="E-Mail">
            <input type="password" name="mdp" placeholder="Mot de passe">
            <button type="submit" name="submit">S'inscrire</button>
          </form>
        </div>

      </div>

    </section>


    <?php getFooter()?>