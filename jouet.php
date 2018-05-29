<?php
require_once 'lib/functions.php';
require_once 'model/database.php';

// Vérifier si le paramètre id est bien présent dans l'URL
if (!isset($_GET["id"]) || !is_numeric($_GET["id"])) {
    header("Location: 404.php");
}

$id = $_GET["id"];

$toy = getOneToy($id);
//$list_users = getAllUsersByToy($id);
$list_pictures = getAllPicturesByToy($id);
$list_toys = getAllToysByCategory($toy["category_id"], $id, 2);

getHeader($toy["title"]);
?>

<section class="container">
    
    <h2><?php echo $toy["title"]; ?></h2>
    <p>Date de mise en ligne : <?php echo $toy["creation_date"]; ?></p>
    
    <img src="uploads/<?php echo $toy["picture"]; ?>" alt="">
    <p><?php echo $toy["description"]; ?></p>
    
    
    <!-- Liste des jouets de la même categorie ???-->
    <h2>Liste des jouets de la même categorie</h2>
    
    <?php foreach ($list_toys as $toys) : ?>
        <?php echo $toys["title"]; ?>
    <?php endforeach; ?>
    
    <h2>Photos</h2>
    <?php foreach ($list_pictures as $picture) : ?>
    <img src="uploads/<?php echo $picture["filename"]; ?>" alt="">
    <?php endforeach; ?>
</section>

<?php getFooter(); ?>