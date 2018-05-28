<?php
require_once 'lib/functions.php';
require_once 'model/database.php';

// Déclaration des variables


getHeader("Accueil");

?>

  <h2>CONTACTEZ-NOUS</h2>

  <p>5 Place Saint-Campus, 35000 Rennes
    <br>
    <strong>Tél 02 34 56 78 90</strong>
  </p>
  <p>Heures d'ouvertures
    <br>
    <strong> Lun-Ven &lt; 9h-18h00 ; Sam &lt; 8h30-19h00</strong>
  </p>
  </article>

  <form class="" action="index.html" method="post">
    <input type="text" name="nom" placeholder="Nom">
    <input type="text" name="prénom" placeholder="Prénom">
    <p>
      <textarea name="commentaire" rows="6" cols="80" placeholder="Votre message"></textarea>
    </p>
    <button type="submit" name="button">
      CONTACTEZ-NOUS
      <br>
    </button>

  </form>



  <?php getFooter()?>