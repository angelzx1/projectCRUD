<?php
$nome = addslashes($_POST['nome']);
$email = addslashes($_POST['email']);

$servidor = "localhost";
$usuario = "root";
$senha ="";
$dbname = "testeusers";

$conn=mysqli_connect($servidor, $usuario, $senha, $dbname);

$resultado = "INSERT INTO users (nome, email , created) VALUES ('$nome', '$email', NOW())";
$resultado_total = mysqli_query($conn, $resultado);