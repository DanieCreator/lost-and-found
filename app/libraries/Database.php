<?php

/**
 * PDO Database class
 * Connects to the database
 * Creates prepared statements
 * Binds Parameters
 * Queries and returns result from db
 */

class Database
{
    private $dbhost = DB_HOST;
    private $dbname = DB_NAME;
    private $dbuser = DB_USER;
    private $dbpass = DB_PASS;

    private $conn = null;
    private $stmt = null;

    public function __construct(){

        //Create the Database Source Name
        $dsn = 'mysql:host=' . $this->dbhost . ';dbname=' . $this->dbname . ';charset=utf8';
        
        $options = array(
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        );

        try{
            $this->conn = new PDO($dsn, $this->dbuser, $this->dbpass, $options);
        }catch(PDOException $exception){
            die($exception->getMessage());
        }
    }

    public function query(string $sql){
        $this->stmt = $this->conn->prepare($sql);
    }

    public function bindParam($param, $value, $type=null){

        if(is_null($type)){
            switch (true) {
                case is_int($value):
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value):
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value):
                    $type = PDO::PARAM_NULL;
                    break;
                default:
                    $type = PDO::PARAM_STR;
                    break;
            }
        }

        $this->stmt->bindParam($param, $value, $type);
    }

    public function execute(){

        return $this->stmt->execute();

    }

    public function resultSet(){
        
        $this->execute();
        return $this->stmt->fetchAll();

    }

    public function single(){

        $this->execute();
        return $this->stmt->fetch();

    }

    public function rowCount(){
        
        return $this->stmt->rowCount();

    }

    public function lastInsertId(){

        return $this->stmt->lastInsertId();

    }
    
    
}