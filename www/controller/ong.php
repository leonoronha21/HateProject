<?php
require_once("../model/class.ong.php");

$ong = new ong();

$ong->$setA_id($_POST['$a_id']);
$ong->$setNome_fantasia($_POST['$nome_fantasia']);
$ong->$setNome_social($_POST['$nome_social']);
$ong->$setRegistro_cartorio($_POST['$registro_cartorio']);
$ong->$setEndereco($_POST['$endereco']);
$ong->$setNumero_endereco($_POST['$numero_endereco']);
$ong->$setBairro($_POST['$bairro']);
$ong->$setCep($_POST['$cep']);
$ong->$setEstado($_POST['$estado']);
$ong->$setEmail($_POST['$email']);    

$ong->cadastra_ong();

?>