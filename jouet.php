<?php
require_once 'lib/functions.php';
require_once 'model/database.php';

// Vérifier si le paramètre id est bien présent dans l'URL
if (!isset($_GET["id"]) || !is_numeric($_GET["id"])) {
    header("Location: 404.php");
}

$id = $_GET["id"];

$toy = getOneToy($id);

$list_pictures = getAllPicturesByToy($id);

$list_toys = getAllToysByCategory($toy["category_id"], $id, 2);

getHeader($toy["title"]);
?>

<section class="container">
    
    <h2><?php echo $toy["title"]; ?></h2>
    <p>Date de mise en ligne : <?php echo $toy["creation_date"]; ?></p>
    <p>Nom du troqueur : <?php echo $toy["user_id"]; ?></p>
    
    
    <img src="uploads/<?php echo $toy["picture"]; ?>" alt="<?php echo $toy["title"]; ?>">
    <p><?php echo $toy["description"]; ?></p>
    
    

        <!-- autres photos du jouets dans table project_picture ???-->
    <h2>Autres vue du jouets</h2>
    <?php foreach ($list_pictures as $picture) : ?>
    <img src="uploads/<?php echo $picture["filename"]; ?>" alt="<?php echo $picture["alt"]; ?>">
    <?php endforeach; ?>
    
    
       <!-- Liste des jouets de la même categorie ???-->
    <h2>Liste des jouets de la même categorie</h2>
    
    <?php foreach ($list_toys as $toys) : ?>
    <h3><?php echo $toys["title"]; ?></h3>
    <img src="uploads/<?php echo $toys["picture"]; ?>" alt="<?php echo $toys["title"]; ?>">
    <?php endforeach; ?>
    
</section>

<?php getFooter(); ?>