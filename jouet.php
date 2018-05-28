<?php
require_once 'lib/functions.php';
require_once 'model/database.php';

// Déclaration des variables


getHeader("Accueil");

?>

    <!--       Jouet à échanger -->

    <section id="scooter" class="container">

      <h2>Scooter Janod</h2>

      <aside id="type-toy">
        <ul>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
        </ul>
      </aside>

      <article id="scooter-toy">

        <img src="./images/scooter.jpg" alt="Scooter Janod">

        <ul>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
        </ul>


        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni consequuntur nam molestiae corporis ea inventore animi, deserunt quaerat assumenda, impedit atque unde quisquam adipisci architecto dignissimos magnam quasi laboriosam. Quisquam aspernatur
          quia assumenda amet dolore molestiae quam maiores.</p>

      </article>

    </section>


    <!--  Section autres jouets-->

    <section id="autres">

      <h3>Voici d'autres jouets qui pourraient vous interresser</h3>



      <div class="">

        <a href="./images/cuisiniere-bois.jpg" class="more"><img title="Voir le jouet" class="miniature" src="./images/mini-cuisiniere-bois.jpg" alt="Camion de pompier en bois"></a>

        <a href="./images/peluche-cochon.jpg" class="more"><img title="Voir le jouet" class="miniature" src="./images/mini-peluche-cochon.jpg" alt="Camion de pompier en bois"></a>

        <a href="./images/guitare.jpg" class="more"><img title="Voir le jouet" class="miniature" src="./images/mini-guitare.jpg" alt="Camion de pompier en bois"></a>

      </div>

    </section>


     <?php getFooter()?>