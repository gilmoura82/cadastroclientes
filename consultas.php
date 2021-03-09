<?php
	
include_once("conexao.php");

$filtro = isset($_GET['filtro'])?$_GET['filtro']:"";
$filtrocpf = isset($_GET['filtrocpf'])?$_GET['filtrocpf']:"";
$sql = "select * from clientes";


if ($filtro) {
	$sql = "select * from clientes where nome like '%$filtro%'"; // Nome
} else {
	$sql = "select * from clientes where cpf = '$filtrocpf'"; // CPF		
}
$consulta = mysqli_query($conexao, $sql); // Registros
$registros = mysqli_num_rows($consulta); // Linhas


?>


<!DOCTYPE html>
<html lang=pt-br>
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
				<h2>Consultas</h2>
				<hr><br>
				<form method="get" action="">
					
					<label>Filtrar Por Nome:</label><br>
					<input type="text" name="filtro" class="campo">
					<input type="submit" value="Pesquisar" class="btnsalvar"><br>
					
					<label>Filtrar Por CPF:</label><br>
					<input type="text" name="filtrocpf" class="campo">
					<input type="submit" value="Pesquisar" class="btnsalvar"><br>


				</form>



				<?php

					print "$registros registro(s) encontrado(s)";

					print "<br><br>";

					while($exibirRegistro = mysqli_fetch_array($consulta)) {
						$id = $exibirRegistro[0];
						$nome = $exibirRegistro[1];
						$cpf = $exibirRegistro[2];
						$email = $exibirRegistro[3];
						$datanascimento = $exibirRegistro[4];
						//$sexo = $exibirRegistro[5];
						//$estadocivil = $exibirRegistro[6];
						$ativo = $exibirRegistro[7];

						print "<article>";

						print "Código : $id<br>";
						print "Nome   : $nome<br>";
						print "CPF    : $cpf<br>";
						print "E-mail : $email<br>";
						print "Nasc.  : $datanascimento<br>";
						//print "Sexo   :   $sexo";
						//print "$estadocivil<br>";
						print "Ativo  : $ativo";
						//<a href="alterar.php?id=$exibirRegistro[id]">Alterar</a>;

						print "</article>";

						

						print "</article>";

					}

					mysqli_close($conexao);

				?>



								
			</section>
		</div>


</html>