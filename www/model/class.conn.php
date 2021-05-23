<?php
#https://phpdelusions.net/pdo_examples/select
#https://www.cloudways.com/blog/crud-with-php-data-objects/
class conn{
    private $user = "";
    private $host = "";
    private $pass = "";
    private $db   = "";
    private $conn;

    public function __construct()
    {
        $this->user = "cassolli18";
        $this->host = "mysql01-farm8.kinghost.net";
        $this->pass = "43e2ww4";
        $this->db = "cassolli18";
        $this->getConn();
    }

    private function connect(){

        $options = [
            \PDO::ATTR_ERRMODE            => \PDO::ERRMODE_EXCEPTION,
            \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
            \PDO::ATTR_EMULATE_PREPARES   => false,
        ];
        $dsn = "mysql:host={$this->host};dbname={$this->db};";
        try {
             $conn = new \PDO($dsn, $this->user, $this->pass, $options);
        } catch (\PDOException $e) {
             throw new \PDOException($e->getMessage(), (int)$e->getCode());
        }
        #print_r($conn->query('select database()')->fetch());
        return $this->conn = $conn;
        
    }

    private function getConn()
    {
        $this->connect();
        return $this->conn;
    }

    public function closeConn() {
        $this->conn = null;
     }

     
    public function select($sql){
        if(!$sql){
            return false;
        }

        $this->getConn(); 
        $stmt = $this->conn->query($sql);
        $resultado = $stmt->fetchAll();
        $this->closeConn();
        return $resultado;

    }

    public function insert($sql){
        if(!$sql){
            return false;
        }
        $this->getConn();
       try {
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
       } catch (\PDOException $e) {
            throw new \PDOException($e->getMessage(), (int)$e->getCode());
       }
    }

    public function update($sql){
        if(!$sql){
            return false;
        }
        $this->getConn();
       try {
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
       } catch (\PDOException $e) {
            throw new \PDOException($e->getMessage(), (int)$e->getCode());
       }
    }
        

/*
        if ($this->conn->query($sql) === TRUE) {
            return "Dados salvo com sucesso";
        } else {
            return "Error ao inserir " . $sql . "<br>" . $this->conn->error;
        }
*/


}