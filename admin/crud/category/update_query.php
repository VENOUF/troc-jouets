<?php

require_once '../../../model/database.php';

// Récupérer les données du formulaire
$id = $_POST["id"];
$label = $_POST["label"];


$category = getOneEntity("category", $id);


// Insertion des données en BDD
updateCategory($id, $label);

// Redirection vers la liste
header("Location: index.php");