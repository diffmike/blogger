<?php 

namespace app\core;

class Model 
{

    /**
     * @var null Database Connection
     */
    public $db = null;

    /**
     * Table of the model
     * @var null
     */
    protected $table = null;

    /**
     * ID field of the model
     * @var null
     */
    protected $idField = 'id';

    /**
     * Attributes of the model
     * @var null
     */
    protected $attributes = null;

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

    /**
     * Get all records from model table
     * @return mixed
     */
    public function all()
    {
        $sql = "SELECT * FROM " . $this->table;
        $query = $this->db->prepare($sql);
        $query->execute();
        return $this->toModel($query->fetchAll());
    }

    /**
     * Get one record from model table
     * @return mixed
     */
    public function one($id)
    {
        $sql = "SELECT * FROM {$this->table} WHERE {$this->idField} = :id LIMIT 1";
        $query = $this->db->prepare($sql);
        $query->execute([$this->idField => $id]);
        return $this->toModel($query->fetchAll()[0]);
    }

    /**
     * Convert object from database to model
     *
     * @param $data
     * @return Model|array
     */
    private function toModel($data)
    {
        if (is_array($data)) {
            return array_map(function($item) {
                $model = new Model;
                $model->attributes = $item;
                return $model;
            }, $data);
        } else {
            $model = new Model;
            $model->attributes = $data;
            return $model;
        }
    }

    /**
     * Dynamically retrieve attributes on the model.
     *
     * @param  string  $key
     * @return mixed
     */
    public function __get($key)
    {
        return $this->attributes->{$key};
    }
}