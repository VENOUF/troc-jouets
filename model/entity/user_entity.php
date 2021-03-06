<?php
// on recupere les utilisateurs

function getOneUserByEmailPassword(string $email, string $password) {
    
    /* @var $connection PDO */
    global $connection;

    $query = "SELECT *
            FROM user
            WHERE email = :email
            AND password = SHA1(:password);";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":password", $password);
    $stmt->execute();

    return $stmt->fetch();
} 


function getOneUser(int $id) {
    /* @var $connection PDO */
    global $connection;

    $query = "SELECT *
            FROM user
            WHERE id = :id;";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    return $stmt->fetch();
}

/// copie colle de ce qui etait member dans ecolidaire

function getAllUsers() {
    /* @var $connection PDO */
    global $connection;

    $query = "SELECT
                user.*,
                CONCAT(user.firstname, ' ', user.lastname) AS fullname
            FROM user;";

    $stmt = $connection->prepare($query);
    $stmt->execute();

    return $stmt->fetchAll();
}


function insertUser(string $firstname, string $lastname, string $picture) {
    /* @var $connection PDO */
    global $connection;

    $query = "INSERT INTO user (firstname, lastname, picture)
                VALUES (:firstname, :lastname, :picture);";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":firstname", $firstname);
    $stmt->bindParam(":lastname", $lastname);
    $stmt->bindParam(":picture", $picture);
    $stmt->execute();
}

function updateUser(int $id, string $firstname, string $lastname, string $picture) {
    /* @var $connection PDO */
    global $connection;

    $query = "UPDATE user
                SET firstname = :firstname,
                lastname = :lastname,
                picture = :picture
            WHERE id = :id;";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":firstname", $firstname);
    $stmt->bindParam(":lastname", $lastname);
    $stmt->bindParam(":picture", $picture);
    $stmt->execute();
}