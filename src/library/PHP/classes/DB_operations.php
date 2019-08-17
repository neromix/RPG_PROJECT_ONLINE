<?php

declare(strict_types=1);

namespace App;

//  Add user = 1 

class DB_operations
{
    public $dependency;
    protected $params;
    // List of query
        //  Add user = 1 
    protected $queries = array(
        "registration" => "CALL create_user(?,?,?)",
    );

    public function __construct($dependency)
    {
        $this->dependency = $dependency;

    }
    public function chooseQuery($query_num)
    {
        switch($query_num)
        {
            case 1:
            {
                return $this->queries["registration"];
            }
        }
    }
    // Binding Values from this class array "params"
    public function bindParams($statement)
    {
        foreach ($this -> params as $key => $value) {
            switch($value)
            {
                case is_int($value):
                {
                    $statement -> bindParams($key,$value,PDO::PARAM_INT);
                }
                case is_string($value):
                {
                    $statement -> bindParams($key,$value,PDO::PARAM_STR);
                }
                case is_bool($value):
                {
                    $statement -> bindParams($key,$value,PDO::PARAM_BOOL);
                }
            }
        }
    }
    // Execute the query from the $queries array
    public function executeQuery($query_num)
    {
            
    }
    public function getParams()
    {
        return $this->params;
    }
    public function getDB()
    {
        return $this->dependency->getDb;
    }
    // Clear $params Array and set new values there
    public function setParams($params)
    {
        unset($this->params);
        foreach($params as $value)
        {
            array_push($this->params,$value);
        }
    }

}