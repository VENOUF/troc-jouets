<?php

define("DB_HOST", "localhost");
define("DB_NAME", "troc_jouets");
define("DB_USER", "root");
define("DB_PASS", "root");

define("CURRENT_URL", "http://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]);
define("SITE_URL", "http://localhost:8888/troc_jouets/");
define("ADMIN_URL", SITE_URL . "admin/");