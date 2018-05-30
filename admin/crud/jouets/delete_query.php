<?php

require_once '../../../model/database.php';

$id = $_GET["id"];

deleteEntity("toy", $id);


header("Location: index.php");