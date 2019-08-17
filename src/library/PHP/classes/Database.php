<?php

declare(strict_types=1);

namespace App;

use PDO;
use PDOException;

// @param  $host
// @param  $user
// @param  $password
// @param  $db_name
// @param array $options
// @param  $db

require_once("../../../config/config_database.php");
require_once("DB_operations.php");

class Database
{
    protected $host = Host;
    protected $user = User;
    protected $password = Password;
    protected $db_name = Db_name;
    protected $options = array(
        PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION
    );
    protected $db;


    // DB connection
    public function __construct()
    { 
        try
        {
            $db = new PDO("mysql:host=" . $this->getHost() , ",dbname=" . $this->getDBname,$this->getUser(),$this->getPassword,$this->options);
        }
        catch(PDOException $error)
        {
            echo "Error: " . $error -> getMessage();
        }
    }
    // Getters
    public function getHost()
    {
        return $this->host;
    }
    public function getUser()
    {
        return $this->user;
    }
    public function getPassword()
    {
        return $this->password;
    }
    public function getDBname()
    {
        return $this->db_name;
    }
    public function getDb()
    {
        return $this->db;
    }
};

