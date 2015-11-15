<?php 

namespace app\core;

class Model 
{

    /**
     * @var null Database Connection
     */
    public $db = null;

    /**
     * Open database connection and load model
     */
    function __construct()
    {
        $this->openDatabaseConnection();
    }

    /**
     * Open database connection with credentials config
     */
    private function openDatabaseConnection()
    {
        $options = array(\PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_OBJ, \PDO::ATTR_ERRMODE => \PDO::ERRMODE_WARNING);
        $this->db = new \PDO(DB_TYPE . ':host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=' . DB_CHARSET, DB_USER, DB_PASS, $options);
    }
}