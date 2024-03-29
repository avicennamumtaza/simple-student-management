<?php

class Database {
    private $host = db_host;
    private $user = db_user;
    private $pass = db_pass;
    private $db_name = db_name;
    
    private $dbh; // database handler
    private $stmt; // query statement

    public function __construct() {
        $dsn = "mysql::host=$this->host;dbname=$this->db_name"; // data source name
        
        $option = [
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE=> PDO::ERRMODE_EXCEPTION
        ];
        
        try {
            $this->dbh = new PDO($dsn, $this->user, $this->pass, $option);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function query($query) {
        $this->stmt = $this->dbh->prepare($query);
    }

    public function bind($param, $value, $type=null) {
        if (is_null($type)) {
            switch (true) {
                case is_int($value) :
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value) :
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value) :
                    $type = PDO::PARAM_NULL;
                    break;
                default :
                    $type = PDO::PARAM_STR;
            }
        }
        $this->stmt->bindValue($param, $value, $type);
    }

    public function exec() {
        $this->stmt->execute();
    }

    public function allSet() {
        $this->exec();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function singleSet() {
        $this->exec();
        return $this->stmt->fetch(PDO::FETCH_ASSOC);
    }
}

?>