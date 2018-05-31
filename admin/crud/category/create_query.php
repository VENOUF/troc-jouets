<?php

require_once '../../../model/database.php';

// Récupérer les données du formulaire
$label = $_POST["label"];

// Insertion des données en BDD
insertCategory($label);

// Redirection vers la liste
header("Location: index.php");