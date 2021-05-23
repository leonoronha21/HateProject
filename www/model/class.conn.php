<?php

class conn{
    private $user = "";
    private $host = "";
    private $pass = "";
    private $db   = "";
    private $conn = "";

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
        return $this->conn = $conn;

    }

    private function getConn()
    {
        $this->connect();
        return $this->conn;
    }

    private function closeConn(){
        $this->conn->close();
    }
/*

    public function select($sql){
        if(!$sql){
            return false;
        }

        $this->getConn(); 
        $resultado = $this->conn->query($sql);
        $this->closeConn();
        return $resultado;

    }
*/
    public function insert($sql){
        if(!$sql){
            return false;
        }
        $this->getConn(); 
        $stmt= $this->conn->prepare($sql);
        $stmt->execute();

/*
        if ($this->conn->query($sql) === TRUE) {
            return "Dados salvo com sucesso";
        } else {
            return "Error ao inserir " . $sql . "<br>" . $this->conn->error;
        }
*/
    }


}