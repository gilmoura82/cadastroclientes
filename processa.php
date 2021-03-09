<?php

include_once("conexao.php");

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];
$datanascimento = $_POST['datanascimento'];
$sexo = $_POST['sexo'];
$estadocivil = $_POST['estadocivil'];
$ativo = $_POST['ativo'];

$sql = "insert into clientes (nome, cpf, email, datanascimento, sexo, estadocivil, ativo) values ('$nome', '$cpf', '$email', '$datanascimento', '$sexo', '$estadocivil', '$ativo')";
$salvar = mysqli_query($conexao, $sql);

$linhas = mysqli_affected_rows($conexao);



mysqli_close($conexao);


?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Cadastro de Clientes</title>
		<link rel="stylesheet" href="css/estilo.css">
	</head>
		<div class="container">
			<nav>
				<ul class="menu">
					<a href="index.php"><li>Cadastros</li></a>
					<a href="consultas.php"><li>Consultas</li></a>
				</ul>
			</nav>
			<section>
				<h2>Confirmação de Cadastro</h2>
				<hr><br>

				<?php
					if($linhas == 1) {
						print "Cadastro Efetuado!";
					} else {
						print "Cadastro Não Efetuado."; 
					}


				?>
				
			</section>
		</div>


</html>