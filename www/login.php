<?php
    require_once 'model/class.conn.php';

$servername = "mysql01-farm8.kinghost.net";
$username = "cassolli18";
$password = "43e2ww4";
$dbname = "cassolli18";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Verifica a conexao
if ($conn->connect_error) {
    die("problema na conexão: " . $conn->connect_error);
}
$email = $_POST['email'];//armazenando entrada 'nome'
$senha = $_POST['senha'];//armazenando entrada 'senha'
// Realizaa consulta
//$sql = "select usuario, senha from leonardoandrade_usuario where usuario='$usuario'and senha='$senha'";  
$result = $conn->query($sql);

$row = mysqli_fetch_array($result);

if($row['email']==$usuario && $row['senha']==$senha){
    
    session_start();
    $_SESSION['email'] = $row['usuario'];
    
    $variavel=$_SESSION['email'];
    
   //header('Location: index.php');
    
}else{
    //header('Location: login.html');
}

?>