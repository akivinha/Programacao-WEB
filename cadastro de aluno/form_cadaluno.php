<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Cadastro de Alunos</title>
   
    <link rel="stylesheet" href="estilos.css"/>
  </head>
  <body>
   	<h1>Cadastro de Alunos</h1>
	<form method="POST" action="insere_aluno.php"
		<label for="nome">Nome do aluno:</label>
		<input type="text" name="nome" id="nome"/>
		
		<label for="data">Data de nascimento:</label>
		<input type="date" name="data" id="data"/>
		
		<label for="cidade">Cidade:</label>
		<select name="cidade">
		<?php
			$con=new mysqli("localhost", "root", "", "aula");
			$sql="SELECT codigo_cid, nome_cid, uf_cid 
			FROM cidades ORDER BY nome_cid";

			$result=$con->query($sql);
			while($linha=$result->fetch_assoc()){
				echo "<option value=\"{$linha['codigo_cid']}\">{$linha['nome_cid']} - {$linha['uf_cid']}</option>";
			}
		?>
		</select>

		<input type="submit" value="Cadastrar"/>

	</form>
  </body>
</html>