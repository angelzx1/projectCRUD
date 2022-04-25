<?php 
$servidor = "localhost";
$usuario = "root";
$senha ="";
$dbname = "testeusers";

global $mysqli;

$conn=mysqli_connect($servidor, $usuario, $senha, $dbname);