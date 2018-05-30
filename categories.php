<?php
require_once 'lib/functions.php';
require_once 'model/database.php';

// Déclaration des variables
$list_categories = getAllEntity("category");

getHeader("Catégories de jouets");
?>

<section  class="container" id="categories">


    <h2>Les catégories</h2>


    <div>

        <?php foreach ($list_categories as $category) : ?>

            <li><a href="categorie.php?id=<?php echo $category["id"]; ?>" title=""><?php echo $category["label"]; ?></a></li>

        <?php endforeach; ?>

    </div> 


</section>

<?php
getFooter()?>