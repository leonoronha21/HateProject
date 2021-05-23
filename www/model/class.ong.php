<?php
require_once("../model/class.conn.php");

class ong extends conn{
    private $id = "";
    private $a_id = "";
    private $nome_fantasia = "";
    private $nome_social = "";
    private $registro_cartorio = "";
    private $endereco = "";
    private $numero_endereco = "";
    private $bairro = "";
    private $cep = "";
    private $estado = "";
    private $email = "";

    public function cadastra_ong(){
        $sql = "INSERT INTO 
                    `ong` 
                 VALUES 
                (
                    '{$this->getA_id()}',
                    '{$this->getNome_fantasia()}', 
                    '{$this->getNome_social()}',
                    '{$this->getRegistro_cartorio()}',
                    '{$this->getEndereco()}', 
                    '{$this->getNumero_endereco()}', 
                    '{$this->getBairro()}', 
                    '{$this->getCep()}', 
                    '{$this->getEstado()}', 
                    '{$this->getEmail()}',
                    '1', 
                    CURRENT_TIMESTAMP)";
        #$resultado=$this->insert($sql);
        #return $resultado;
        return $this->getConn();
    }

    /**
     * Get the value of nome_fantasia
     */ 
    public function getNome_fantasia()
    {
        return $this->nome_fantasia;
    }

    /**
     * Set the value of nome_fantasia
     *
     * @return  self
     */ 
    public function setNome_fantasia($nome_fantasia)
    {
        $this->nome_fantasia = $nome_fantasia;

        return $this;
    }

    /**
     * Get the value of nome_social
     */ 
    public function getNome_social()
    {
        return $this->nome_social;
    }

    /**
     * Set the value of nome_social
     *
     * @return  self
     */ 
    public function setNome_social($nome_social)
    {
        $this->nome_social = $nome_social;

        return $this;
    }

    /**
     * Get the value of registro_cartorio
     */ 
    public function getRegistro_cartorio()
    {
        return $this->registro_cartorio;
    }

    /**
     * Set the value of registro_cartorio
     *
     * @return  self
     */ 
    public function setRegistro_cartorio($registro_cartorio)
    {
        $this->registro_cartorio = $registro_cartorio;

        return $this;
    }

    /**
     * Get the value of endereco
     */ 
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * Set the value of endereco
     *
     * @return  self
     */ 
    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;

        return $this;
    }

    /**
     * Get the value of numero_endereco
     */ 
    public function getNumero_endereco()
    {
        return $this->numero_endereco;
    }

    /**
     * Set the value of numero_endereco
     *
     * @return  self
     */ 
    public function setNumero_endereco($numero_endereco)
    {
        $this->numero_endereco = $numero_endereco;

        return $this;
    }

    /**
     * Get the value of bairro
     */ 
    public function getBairro()
    {
        return $this->bairro;
    }

    /**
     * Set the value of bairro
     *
     * @return  self
     */ 
    public function setBairro($bairro)
    {
        $this->bairro = $bairro;

        return $this;
    }

    /**
     * Get the value of cep
     */ 
    public function getCep()
    {
        return $this->cep;
    }

    /**
     * Set the value of cep
     *
     * @return  self
     */ 
    public function setCep($cep)
    {
        $this->cep = $cep;

        return $this;
    }

    /**
     * Get the value of estado
     */ 
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set the value of estado
     *
     * @return  self
     */ 
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of a_id
     */ 
    public function getA_id()
    {
        return $this->a_id;
    }

    /**
     * Set the value of a_id
     *
     * @return  self
     */ 
    public function setA_id($a_id)
    {
        $this->a_id = $a_id;

        return $this;
    }
}
