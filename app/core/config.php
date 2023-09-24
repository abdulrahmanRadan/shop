<?php

define("WEBSITE_TITLE", 'BARG SHOP');

//database name
define('DB_NAME', "eshop_db");
define('DB_USER', "root");
define('DB_PASS', "");
define('DB_type', "mysql");
define('DB_HOST', "localhost");
define('OPTIONS', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf-8",));

define('THEME', 'eshop/');

define('DEBUG', true);
if (DEBUG) {
    ini_set('display_errors', 1);
} else {
    ini_set('display_errors', 0);
}
