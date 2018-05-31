<?php
require_once '../../../model/database.php';

$id = $_GET["id"];
$category = getOneEntity("category", $id);

require_once '../../layout/header.php';
?>

<h1>Modifier une catégorie</h1>

<form action="update_query.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="label">Nom de la catégorie</label>
        <input type="text" id="label" name="label" value="<?php echo $category["label"]; ?>" class="form-control">
    </div>
    
    
    <input type="hidden" name="id" value="<?php echo $category["id"]; ?>">
    <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Enregistrer</button>
</form>

<?php require_once '../../layout/footer.php'; ?>
