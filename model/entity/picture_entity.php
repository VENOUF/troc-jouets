<?php

function getAllPicturesByToy(int $id) {
    /* @var $connection PDO */
    global $connection;

    $query = "SELECT *
            FROM toy_picture
            WHERE toy_id = :id;";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    return $stmt->fetchAll();
}