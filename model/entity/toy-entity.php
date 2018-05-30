<?php

function getAllToys(int $limit = 999) {
    /* @var $connection PDO */
    global $connection;

    $query = "SELECT
                toy.id,
                toy.title,
                toy.picture,
                toy.description,
                DATE_FORMAT(toy.creation_date, '%d-%m-%Y') AS creation_date,
                category.label as category
            FROM toy
            INNER JOIN category ON category.id = toy.category_id
            LIMIT :limit;";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":limit", $limit, PDO::PARAM_INT);
    $stmt->execute();

    return $stmt->fetchAll();
}

function getAllToysByCategory(int $category_id, int $id = 0, int $limit = 999) {
    /* @var $connection PDO */
    global $connection;

    $query = "SELECT
                toy.id,
                toy.title,
                toy.picture,
                toy.description,
                DATE_FORMAT(toy.creation_date, '%d-%m-%Y') AS creation_date,
                category.label as category
            FROM toy
            INNER JOIN category ON category.id = toy.category_id
            WHERE category.id = :category_id
            AND toy.id != :id
            LIMIT :limit;";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":category_id", $category_id);
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":limit", $limit, PDO::PARAM_INT);
    $stmt->execute();

    return $stmt->fetchAll();
}

function getOneToy(int $id) {
    /* @var $connection PDO */
    global $connection;

    $query = "SELECT *
            FROM toy
    WHERE toy.id = :id";


    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    return $stmt->fetch();
}

function getAllBooks(int $id) {
    /* @var $connection PDO */
    global $connection;

    $query = "SELECT *
            FROM toy
    WHERE category_id = 3";


    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    return $stmt->fetchAll();
}