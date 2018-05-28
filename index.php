<?php
require_once 'lib/functions.php';
require_once 'model/database.php';

// Déclaration des variables


getHeader("Accueil");

?>



<!--  Section illustration  -->

    <section id="illustration" class="">
      <img src="./images/visuel-maisons.png" alt="">

    </section>

    <h1 class="hidden-text">Troc jouets, une communauté pour échanger vos jouets</h1>

    <!--  Section nouveaux jouetsà troquer   -->

    <section id="toy" class="container">

      <div class="titre">
        <h2>Les nouveaux jouets à troquer</h2>
      </div>

      <div class="owl-carousel owl-theme">
        <div class="item">
          <div class="miniature">
            <img src="./images/cuisiniere-bois.jpg" alt="cuisinière en bois">
          </div>
          <div class="titre-mini">
            <a href="jouet.html">
              <h3>Cuisinière en bois</h3>
            </a>
          </div>
          <p>Jolie cuisinière en bois Moulin Roty</p>
          <div class="info-miniature">
            <a href="troqueur">
              <p>Julie</p>
            </a>
            <a href="lieu.html">
              <p>22</p>
            </a>
          </div>
          <a class="more" href="#">En savoir plus</a>
        </div>

        <div class="item">
          <div class="miniature">
            <img src="./images/poupee.jpg" alt="poupée">
          </div>
          <div class="titre-mini">
            <a href="jouet.html">
              <h3>Poupée Moulin Roty</h3>
            </a>
          </div>
          <p>Poupée en tissu collection "Les Parisiènes"</p>
          <div class="info-miniature">
            <a href="jouet.php">
              <p>Marie</p>
            </a>
            <a href="jouet.php">
              <p>22</p>
            </a>
          </div>
          <a class="more" href="#">En savoir plus</a>
        </div>

        <div class="item">
          <div class="miniature">
            <img src="./images/scooter.jpg" alt="scooter">
          </div>


          <div class="titre-mini">
            <a href="jouet.php">

             <h3>Scooter en bois</h3>
            </a>
          </div>
          <p>Joli scooter Janod couleur vert d'eau</p>

          <div class="info-miniature">
            <a href="jouet.php">
              <p>Pierre</p>
            </a>
            <a href="jouet.php">
              <p>56</p>
            </a>
          </div>
          <a class="more" href="#">En savoir plus</a>
        </div>

        <div class="item">
          <div class="miniature">
            <img src="./images/guitare.jpg" alt="guitare">
          </div>
          <div class="titre-mini">
            <a href="jouet.html">
              <h3>Guitare enfant</h3>
            </a>
          </div>
          <p>Pour jouer comme les grands, cette jolie guitare...</p>
          <div class="info-miniature">
            <a href="jouet.html">
              <p>Sophie</p>
            </a>
            <a href="jouet.html">
              <p>29</p>
            </a>
          </div>
          <a class="more" href="#">En savoir plus</a>
        </div>

        <div class="item">
          <div class="miniature">
            <img src="./images/valise-outils.jpg" alt="valise à outils">
          </div>
          <div class="titre-mini">
            <a href="jouet.html">
              <h3>Valise à outils</h3>
            </a>
          </div>
          <p>Une valise à outils pour faire du bricolage comme les grands.</p>
          <div class="info-miniature">
            <a href="jouet.html">
              <p>Marie</p>
            </a>
            <a href="jouet.html">
              <p>22</p>
            </a>
          </div>
          <a class="more" href="#">En savoir plus</a>
        </div>

        <div class="item">
          <div class="miniature">
            <img src="./images/voiture-vilac.jpg" alt="voiture vilac">
          </div>
          <div class="titre-mini">
            <a href="jouet.html">
              <h3>Voiture Vilac</h3>
            </a>
          </div>
          <p>Trés beau modèle de voiture vilac.</p>
          <div class="info-miniature">
            <a href="jouet.html">
              <p>Paula</p>
            </a>
            <a href="jouet.html">
              <p>35</p>
            </a>
          </div>
          <a class="more" href="#">En savoir plus</a>
        </div>

        <div class="item">
          <div class="miniature">
            <img src="./images/peluche-cochon.jpg" alt="peluche cochon rose">
          </div>
          <div class="titre-mini">
            <a href="jouet.html">
              <h3>Peluche Cochon</h3>
            </a>
          </div>
          <p>Peluche en coton,idéale pour doudou...</p>
          <div class="info-miniature">
            <a href="jouet.html">
              <p>Maxime</p>
            </a>
            <a href="jouet.html">
              <p>35</p>
            </a>
          </div>

          <a class="more" href="#">En savoir plus</a>
        </div>

        <div class="item">
          <div class="miniature">
            <img src="./images/cubes-bois.jpg" alt="cubes en bois">
          </div>
          <div class="titre-mini">
            <a href="jouet.html">
              <h3>Cubes en bois</h3>
            </a>
          </div>
          <p>Abécédaire en cube de bois, tons bleu et rose, ...</p>

          <div class="info-miniature">
            <a href="jouet.html">
              <p>Ronan</p>
            </a>
            <a href="jouet.html">
              <p>22</p>
            </a>
          </div>
          <a class="more" href="#">En savoir plus</a>
        </div>

      </div>

    </section>


    <!--  Section livres jeunesse à troquer   -->

    <section id="book" class="container">
      <div class="titre">
        <h2>Des livres jeunesse, des BDs à troquer</h2>
      </div>



      <div class="owl-carousel owl-theme">
        <div class="item">
          <div class="miniature">
            <img src="./images/livre-faceties-chats.jpg" alt="Facécies de chats">
          </div>
          <div class="titre-mini">
            <h3>Facécies de chats</h3>
          </div>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste, adipisci.</p>
          <div class="info-miniature">
            <p>Sophie</p>
            <p>29</p>
          </div>
          <a class="more" href="#">En savoir plus</a>
        </div>

        <div class="item">
          <div class="miniature">
            <img src="./images/bd-paracuellos.jpg" alt="paracuellos"> </div>
          <div class="titre-mini">
            <h3>Paracuellos</h3>
          </div>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, deserunt.</p>
          <div class="info-miniature">
            <p>Sophie</p>
            <p>29</p>
          </div>
          <a class="more" href="#">En savoir plus</a>
        </div>
        <div class="item">
          <div class="miniature">
            <img src="./images/livre-contes-macabres.jpg" alt="Les contes macabres">
          </div>
          <div class="titre-mini">
            <h3>Les contes macabres</h3>
          </div>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
          <div class="info-miniature">
            <p>Julie</p>
            <p>29</p>
          </div>
          <a class="more" href="#">En savoir plus</a>
        </div>
        <div class="item">
          <div class="miniature">
            <img src="./images/livre-notre-dame-de-paris.jpg" alt="Notre dame de Paris">
          </div>
          <div class="titre-mini">
            <h3>Notre Dame de Paris</h3>
          </div>
          <p>Magnifique livre illustré par Benjamin Lacombe. Tome 1 rare, fera le bonheur d'un collectonneur.</p>
          <div class="info-miniature">
            <p>Fred</p>
            <p>29</p>
          </div>
          <a class="more" href="#">En savoir plus</a>
        </div>
        <div class="item">
          <div class="miniature">
            <img src="./images/livre-tetine-nina.jpg" alt="La tétine de Nina">
          </div>
          <div class="titre-mini">
            <h3>La tétine de Nina</h3>
          </div>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
          <div class="info-miniature">
            <p>Isabelle</p>
            <p>35</p>
          </div>
          <a class="more" href="#">En savoir plus</a>
        </div>


      </div>


    </section>



    <!--  Section actualités    -->

    <section id="news" class="container">

      <div class="titre">
        <h2>Actualités Troc Jouets</h2>
      </div>


      <div class="owl-carousel owl-theme">

        <div class="item">
          <div class="miniature">
            <img src="./images/calendrier-noel.jpg" alt="Calendrier de l'avent">
          </div>
          <div class="titre-mini">
            <h3>Calendrier de l'avent</h3>
          </div>

          <p>DIY</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
          <div class="info-miniature">
            <p>Marc</p>
            <p>22</p>
          </div>

          <div class="rs-partage">
            <div class="">
              <p>Partagez sur</p>
            </div>
            <nav class="social-nav social-nav-partage">
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
          </div>

          <a class="more" href="#">Lire la suite</a>

        </div>

        <div class="item">
          <div class="miniature">
            <img src="./images/photo-trocante.jpg" alt="Trocante jouets à Rennes">
          </div>
          <div class="titre-mini">
            <h3>Trocante Rennes</h3>
          </div>

          <p>Evènement</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit, totam.</p>
          <div class="info-miniature">
            <p>Sandrine</p>
            <p>22</p>
          </div>

          <div class="rs-partage">
            <div class="">
              <p>Partagez sur</p>
            </div>
            <nav class="social-nav social-nav-partage">
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
          </div>
          <a class="more" href="#">Lire la suite</a>
        </div>

        <div class="item">
          <div class="miniature">
            <img src="./images/cupcake.jpg" alt="cupcakes">
          </div>
          <div class="titre-mini">
            <h3>Cupcakes</h3>
          </div>
          <p>Recette</p>
          <p>Lorem ipsum dolor sit amet...</p>
          <div class="info-miniature">
            <p>Pierre</p>
            <p>22</p>
          </div>





          <div class="rs-partage">
            <div class="">
              <p>Partagez sur</p>
            </div>
            <nav class="social-nav social-nav-partage">
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
          </div>
          <a class="more" href="#">Lire la suite</a>
        </div>
        <div class="item">
          <div class="miniature">
            <img src="./images/diy.jpg" alt="DIY aquarelles">
          </div>
          <div class="titre-mini">
            <h3>Aquarelles</h3>
          </div>
          <p>DIY</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
          <div class="info-miniature">
            <p>Julie</p>
            <p>22</p>
          </div>
          <div class="rs-partage">
            <div class="">
              <p>Partagez sur</p>
            </div>
            <nav class="social-nav social-nav-partage">
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
          </div>

          <a class="more" href="#">Lire la suite</a>
        </div>
        <div class="item">
          <div class="miniature">
            <img src="./images/gouter-diy.jpg" alt="Goûter">
          </div>
          <div class="titre-mini">
            <h3>Bonbonnières</h3>
          </div>
          <p>DIY</p>
          <p>Lorem ipsum dolor sit amet...</p>
          <div class="info-miniature">
            <p>Julie</p>
            <p>22</p>
          </div>

          <div class="rs-partage">
            <div class="">
              <p>Partagez sur</p>
            </div>
            <nav class="social-nav social-nav-partage">
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
          </div>
          <a class="more" href="#">Lire la suite</a>
        </div>

      </div>

    </section>



    <!--  Section communauté troc jouets/ s'inscrire    -->

    <section class="container inscription">

      <div class="titre">
        <h2>La communauté Troc Jouets</h2>
      </div>

      <p>Profitez de la communauté Troc Jouets pour échanger vos jouets, mais également pour échanger des idées de recettes
        pour organiser vos goûters, des DIY pour partager du temps avec vos enfants et faire de jolis cadeaux personnalisés.</p>
      <p>Retrouver également des infos sur les troquants jouets, et les trocantes nurserie e votre région.</p>
      <p>Inscrivez vous vite!</p>

      <div class="more">
        <a href="connection.html" class="connection more">S'inscrire</a>
      </div>

    </section>


    <!--  Section charte du troqueur    -->

    <section class="container" id="charte">

      <div class="titre">
        <h2>La charte du troqueur</h2>
      </div>

      <div class="item-charte">

        <article class="charte" id="responsable">

          <h3>Responsable</h3>

          <div class="picto">
            <img src="./images/picto-responsable.svg" alt="Picto responsable">
          </div>

          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis
            natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec
          </p>

        </article>

        <article class="charte" id="ethique">

          <h3>éthique</h3>

          <div class="picto">
            <img src="./images/picto-ethique.svg" alt="Picto éthique">
          </div>

          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis
            natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec
          </p>

        </article>


        <article class="charte" id="solidaire">

          <h3>Solidaire</h3>

          <div class="picto">
            <img src="./images/picto-solidaire.svg" alt="Picto solidaire">
          </div>

          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis
            natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec
          </p>

        </article>
      </div>

    </section>

    <?php getFooter()?>

 