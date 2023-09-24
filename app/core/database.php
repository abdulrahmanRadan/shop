<?php
class Database
{
    /**
     * this is the database class
     */
    public static $conaction;
    public  function __construct()
    {
        // Once a version is created because immediately ,you instantiate a class the construct funtion will run ,when return it 
        try {
            // this $dsn named (string) in video
            $dsn = DB_type . ":host=" . DB_HOST . ";dbname=" . DB_NAME;
            self::$conaction = new PDO($dsn, DB_USER, DB_PASS);
            // echo "connect";
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
        // $a = new self();
        // return self::$conaction;
        return $instance = new self();
    } // end gitInstance function

    /**
     * read function 
     * read from database somthing
     */
    public function read($query, $data = array())
    {
        // stm => statement
        $stm = self::$conaction->prepare($query);
        $result = $stm->execute();
        // fetchAll() => 
        // PDO::FETCH_OBJ => this self connection , this is a static value of the PDO class
        if ($result) {
            $data = $stm->fetchAll(PDO::FETCH_OBJ);
            if (is_array($data)) {
                return $data;
            }
        }
        return false;
    } // end fucntion read()

    /**
     * write function 
     * write to or from database somthing
     */
    public function write($query, $data = array())
    {
        // stm => statement
        $stm = self::$conaction->prepare($query);
        $result = $stm->execute();
        // fetchAll() => 
        // PDO::FETCH_OBJ => this self connection , this is a static value of the PDO class
        if ($result) {
            return true;
        }
        return false;
    }
}
// $db = Database::getInstance();
// $data = $db->read("describe users");
// show($data);
