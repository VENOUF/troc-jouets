<?php
require_once '../../../model/database.php';

$list_categories = getAllEntity("category");

require_once '../../layout/header.php';
?>

<h1>Nouveau jouet</h1>

<form action="create_query.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="title">Titre</label>
        <input type="text" id="title" name="title" class="form-control">
    </div>
    <div class="form-group">
        <label for="picture">Photo</label>
        <input type="file" id="picture" name="picture" accept="image/*" class="form-control">
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <textarea name="description" id="description" class="form-control"></textarea>
    </div>
  
    <div class="form-group">
        <label for="creation_date">Date de début</label>
        <input type="date" id="creation_date" name="creation_date" class="form-control">
    </div>
    
    <div class="form-group">
        <label for="category">Catégorie</label>
        <select id="category" name="category_id" class="form-control">
            <?php foreach ($list_categories as $category) : ?>
                <option value="<?php echo $category["id"]; ?>">
                    <?php echo $category["label"]; ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>
    <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Enregistrer</button>
</form>


<?php require_once '../../layout/footer.php'; ?>