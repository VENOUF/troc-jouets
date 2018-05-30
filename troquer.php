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

    <?php if (isset($utilisateur["id"])) : ?>
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


    <div id="connection-inscription-form" class="container">



        <div class="form">
            <div class="picto">
                <img src="./images/picto-connection.svg" alt="">

            </div>
            <label for="connection">Vous êtes déjà membres, connectez-vous !</label>

            <form class="" action="index.html" method="post">
                <input type="text" name="e-mail" placeholder="E-Mail">
                <input type="password" name="mdp" placeholder="Mot de passe">
                <button type="submit" name="submit">Se connecter</button>
            </form>
        </div>


        <div class="form">



            <div class="picto">
                <img src="./images/picto-inscription.svg" alt="">

            </div>
            <label for="inscription">Sinon, inscrivez-vous vite !</label>

            <form class="inscription" action="index.html" method="post">
                <input type="text" name="e-mail" placeholder="E-Mail">
                <input type="password" name="mdp" placeholder="Mot de passe">
                <button type="submit" name="submit">S'inscrire</button>
            </form>
        </div>

    </div>

</section>


<?php
getFooter()?>