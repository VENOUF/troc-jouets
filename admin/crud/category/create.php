<?php require_once '../../layout/header.php'; ?>

<h1>Nouvelle catégorie</h1>

<form action="create_query.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="label">Nom de la catégorie</label>
        <input type="text" id="label" name="label" class="form-control">
    </div>
    
   
    <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Enregistrer</button>
</form>


<?php require_once '../../layout/footer.php'; ?>
