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
        $conn = new mysqli($this->host, $this->user, $this->pass,$this->db);
        $conn = new PDO('mysql:host={$this->host};dbname={$this->db}', $this->user, $this->pass);
   
        if($conn->connect_error){
            die("Problema na Conexão {$conn->connect_error}");
        }

        return $this->conn = $conn;

    }

    public function getConn()
    {
        $this->connect();
        return $this->conn;
    }

    private function closeConn(){
        $this->conn->close();
    }


    public function select($sql){
        if(!$sql){
            return false;
        }

        $this->getConn(); 
        $resultado = $this->conn->query($sql);
        $this->closeConn();
        return $resultado;

    }

    public function insert($sql){
        if(!$sql){
            return false;
        }
        $this->getConn(); 
        if ($this->conn->query($sql) === TRUE) {
            return "Dados salvo com sucesso";
        } else {
            return "Error ao inserir " . $sql . "<br>" . $this->conn->error;
        }

    }


}