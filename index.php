<?php
require_once 'lib/functions.php';
require_once 'model/database.php';

// Déclaration des variables

$list_toys = getAllToys(3);
$list_books = getAllBooks(3);


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

        <!--  Premiere boucle newtoys -->

        <?php foreach ($list_toys as $toy) : ?>
            <?php include 'include/toys_newtoys.php'; ?>
        <?php endforeach; ?>
        <!--  fin de boucle php   -->

    </div>
</section>


<!--  Section livres jeunesse à troquer   -->

<section id="book" class="container">

    <div class="titre">
        <h2>Des livres jeunesse, des BDs à troquer</h2>
    </div>

    <div class="owl-carousel owl-theme">

         <!--  Deuxieme boucle newbooks -->

        <?php foreach ($list_books as $toy) : ?>
            <?php include 'include/toys_newbooks.php'; ?>
        <?php endforeach; ?>
       

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

<?php getFooter() ?>

