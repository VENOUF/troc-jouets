<?php
require_once '../../../model/database.php';

$list_categories = getAllEntity("category");

require_once '../../layout/header.php';
?>

<h1>Gestion des catégories</h1>

<a href="create.php" class="btn btn-primary"><i class="fa fa-plus"></i> Ajouter</a>

<hr>


<table class="table table-striped">
    <thead class="thead-dark">
        <tr>
            <th>Type</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($list_categories as $category) : ?>
            <tr>
                <td><?php echo $category["label"]; ?></td>
                
                         <td>
                                      <a href="update.php?id=<?php echo $category["id"]; ?>" class="btn btn-secondary"><i class="fa fa-edit"></i></a>
                    <a href="delete_query.php?id=<?php echo $category["id"]; ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php require_once '../../layout/footer.php'; ?>