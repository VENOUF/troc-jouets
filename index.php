<?php
require_once 'lib/functions.php';
require_once 'model/database.php';

// Déclaration des variables

$list_toys = getAllToys(100);
$list_books = getAllBooks(100);
$list_news = getAllNews(100);

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
        
          <!--  Troisieme boucle news -->

        <?php foreach ($list_news as $news) : ?>
            <?php include 'include/toys_news.php'; ?>
        <?php endforeach; ?>
              
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

