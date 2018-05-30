<?php

function getAllNews(int $id) {
    /* @var $connection PDO */
    global $connection;

    $query = "SELECT
                news.*,
                user.firstname,
                user.lastname,
                CONCAT(user.firstname, ' ', user.lastname) AS fullname,
                user.codepost
            FROM news
            LEFT JOIN user ON user.id = news.user_id;";
           



    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    return $stmt->fetchAll();
}
