<?php
require_once 'lib/functions.php';
require_once 'model/database.php';

// Vérifier si le paramètre id est bien présent dans l'URL
if (!isset($_GET["id"]) || !is_numeric($_GET["id"])) {
    header("Location: 404.php");
}

$id = $_GET["id"];

$category = getOneEntity("category", $id);
$list_toys = getAllToysByCategory($id);

getHeader("Jouets par catégories");
?>

<section id="categorie" class="container">

    <h2>Jouets à troquer par catégories</h2>



    <div>
        
        <div class="label">
        <label for="category"><?php echo $category["label"]; ?></label>
        </div>

        <?php foreach ($list_toys as $toy) : ?>

            <li>
                <a href="jouet.php?id=<?php echo $toy["id"]; ?>" title="">
                    <?php echo $toy["title"]; ?>
                </a>
            </li>

        <?php endforeach; ?>

    </div> 


</section>

<?php
getFooter()?>