<?php

require '../conn_bd.php';

$nomeUser = $_POST["nome"]
$emailUser = $_POST["email"];
$senhaUser = $_POST["senha"];
$categoria = $_POST["categoria"];

$sql = "select * from usuario where emailUser = '". $emailUser ."' and senhaUser = '". $senhaUser ."'";  
$resultadoQuery = mysqli_query($conn, $sql);

if ($resultadoQuery->num_rows == 0 ){
    die("usuário ou senha inválidos");
}

$arrayQuery = $resultadoQuery->fetch_assoc();
echo "<BR>";
echo "usuário digitado: " . $arrayQuery["idUser"];
echo "<BR>";
echo "<BR>";
echo "senha digitada: " . $arrayQuery["senhaUser"];
echo "<BR>";

?>