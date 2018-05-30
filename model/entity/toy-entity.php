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

function getAllBooks(int $limit) {
    /* @var $connection PDO */
    global $connection;

    $query = "SELECT
                toy.*,
                user.firstname,
                user.lastname,
                CONCAT(user.firstname, ' ', user.lastname) AS fullname,
                user.codepost
            FROM toy
            LEFT JOIN user ON user.id = toy.user_id
            WHERE category_id = 3
            LIMIT :limit;";
    
    $stmt = $connection->prepare($query);
    $stmt->bindParam(":limit", $limit, PDO::PARAM_INT);
    $stmt->execute();

    return $stmt->fetchAll();
}


function insertToy(string $title, string $description, string $picture, int $user_id, int $category_id) {
    /* @var $connection PDO */
    global $connection;

    $query = "INSERT INTO toy (title, description, picture, creation_date, user_id, category_id)
                VALUES (:title, :description, :picture, NOW(), :user_id, :category_id);";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":title", $title);
    $stmt->bindParam(":description", $description);
    $stmt->bindParam(":picture", $picture);
    $stmt->bindParam(":user_id", $user_id);
    $stmt->bindParam(":category_id", $category_id);
    $stmt->execute();
}


function getAllToysByUser(int $limit) {
    /* @var $connection PDO */
    global $connection;

    $query = "SELECT
                toy.*,
                user.id,
                user.firstname,
                user.lastname,
                CONCAT(user.firstname, ' ', user.lastname) AS fullname,
                user.codepost
            FROM toy
            LEFT JOIN user ON user.id = toy.user_id
            LIMIT :limit;";
       
         
       

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":limit", $limit, PDO::PARAM_INT);
    $stmt->execute();

    return $stmt->fetchAll();
}

