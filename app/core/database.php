<?php
class Database
{
    public static $conaction;
    public function __construct()
    {
        // Once a version is created because immediately ,you instantiate a class the construct funtion will run ,when return it 
        try {

            $string = DB_type . ":host=" . DB_HOST . ";dbname.=" . DB_NAME;
            self::$conaction = new PDO($string, DB_USER, DB_PASS);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
    public static function getInstance()
    {
        if (self::$conaction) {
            return self::$conaction;
        }
        //but if this desn't run it means this will run which will create a new version of this entire class 
        $a = new self();
        return self::$conaction;
    }
}
$db = Database::getInstance();
