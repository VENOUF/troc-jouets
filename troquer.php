<?php
require_once 'lib/functions.php';
require_once 'model/database.php';

$utilisateur = currentUser();
$list_categories = getAllEntity("category");

// Déclaration des variables


getHeader("Accueil");
?>

<section id="troquer">

    <h2>Troquer un jouet</h2>


    <div>

        <p>Vous souhaitez proposer un jouet à troquer?</p>
        <p> Vous devez d'abord rejoindre la communauté Troc Jouets en devenant membre.</p>
        <p>Si vous êtes dejà membre, connectez-vous.</p>
    </div>


    <div class="container troquer">
        <?php if (isset($utilisateur["id"])) : ?>
            <div>
                <form action="insert_jouet.php" method="post" enctype="multipart/form-data">
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
            <?php endif; ?>

        </div>

</section>


<?php
getFooter()?>