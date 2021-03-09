<?php
require 'conexao.php';

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
				<h2>Cadastro de Clientes</h2>
				<hr><br>
				<form method="POST" action="processa.php">

					Nome<br>
					<input type="text" name="nome" class="campo" required autofocus><br><br>

					CPF<br>
					<input type="text" name="cpf" class="campo" required><br><br>

					E-Mail<br>
					<input type="text" name="email" class="campo" required><br>

					Data de Nascimento<br>
					<input type="text" name="datanascimento" class="campo" required><br>
					
					Sexo: 
					<input type="radio" name="sexo" value="Masculino">
					<label>Masculino</label>
					<input type="radio" name="sexo" value="Feminino">
					<label>Feminino</label><br><br>

					<label>Estado Civil:</label>

					<select name="estadocivil">
					  <option value="Solteiro(a)">Solteiro(a)</option>
					  <option value="Casado(a)">Casado(a)</option>
					  <option value="Divorciado(a)">Divorciado(a)</option>
					  <option value="UniaoEstavel">Unisão Estável</option>
					</select><br><br>

					Ativo: <input type="checkbox" name="ativo"><br>

					<input type="submit" value="Salvar" class="btnsalvar">
					<input type="reset" value="Cancelar" class="btncancelar">
					<br>
				</form>
			</section>
		</div>


</html>



