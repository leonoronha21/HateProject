<?php
require_once("../model/class.ong.php");

$ong = new ong();

$ong->setA_id($_GET['a_id']);
$ong->setNome_fantasia($_GET['nome_fantasia']);
$ong->setNome_social($_GET['nome_social']);
$ong->setRegistro_cartorio($_GET['registro_cartorio']);
$ong->setEndereco($_GET['endereco']);
$ong->setNumero_endereco($_GET['numero_endereco']);
$ong->setBairro($_GET['bairro']);
$ong->setCep($_GET['cep']);
$ong->setEstado($_GET['estado']);
$ong->setEmail($_GET['email']); 

if($_GET['acao'] == "cadastrar"){
   $ong->cadastra();
}else if ($_GET['acao'] == "editar"){
    $ong->setId($_GET['id']);
    $ong->atualiza();
}
echo "<meta http-equiv='refresh' content='1; url=../view/ong.phtml'>";





?>