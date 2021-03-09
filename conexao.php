<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "sistema";



//Criar a conexao
//$pdo = new PDO("mysql:dbname".$banco.";host=".$servidor, $usuario, $senha);

$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);







