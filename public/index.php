<?php

session_start();

$a = $_SERVER['REQUEST_SCHEME'] . "://" . $_SERVER['SERVER_NAME'] . $_SERVER['PHP_SELF'];
$a = str_replace("index.php", "", $a);

define('ROOT', $a);
define('ROOT', $a);
include "../app/init.php";
show(ROOT);
$app = new App();
