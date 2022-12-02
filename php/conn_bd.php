<?php

$user = "OrganizadorTarefas";
$pass = "projeto123";
$db = "projeto";
$conn = mysqli_connect("localhost", $user, $pass, $db); /* ao invés de localhost acredito que fica o IP do servidor */

if ($conn->connect_errno) {
    die("Erro de conexão" . $conn->connect_error);
}

?>