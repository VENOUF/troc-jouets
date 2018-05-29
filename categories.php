<?php
require_once 'lib/functions.php';
require_once 'model/database.php';

// Déclaration des variables
$list_categories = getAllEntity("category");

getHeader("Catégories de jouets");
?>

<section id="categories">

    <h2>Jouets à troquer par catégories</h2>



    <div class="container">
        <label for="category">Catégorie</label>

        <?php foreach ($list_categories as $category) : ?>

        <li><a href="categorie.php?id=<?php echo $category["id"]; ?>" title=""><?php echo $category["label"]; ?></a></li>

        <?php endforeach; ?>

    </div> 


</section>

<?php
getFooter()?>