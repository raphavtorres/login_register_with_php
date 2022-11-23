<?php

require 'conexao.php';

$nomeUser = $POST["usuario"];
$senhaUser = $POST["senha"];
$emailUser = $POST["email"];
$msgUser = $POST["message"];

/*
ainda preciso organizar quais os campos que vou querer utilizar
$sql = "select * from usuario where nomeUser = '". $nomeUsuario ."' and senhaUser = '". $senhaUsuario ."'";  */
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