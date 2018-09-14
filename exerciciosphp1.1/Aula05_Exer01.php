<!-- Aula05_Exer01.php -->
<html>
	<head>
		<meta charset="UTF-8">
		<title>Aula 5 - E01 - BD01</title>
	</head>
	<body>
		<?php
			// Variavel de CONEXAO
			$con = mysqli_connect('localhost', 'root', '', 'banco');
			
			// Verifica se CONECTOU
			if (!$con) {
				die('Não foi possível conectar: ' . mysqli_error());
			}
			
			// Consulta de DADOS da TABELA
			$sql = "SELECT * FROM cliente;";
			$resultado = mysqli_query($con, $sql);
			if ($resultado->num_rows>0) {
				while($linha = $resultado->fetch_assoc()) {
					echo	"id: " . $linha["idCli"]. 
							" - Nome: " . $linha["nomeCli"]. "<br>";
				}
			} else {
				echo "0 resultados";
			}
			$resultado->close();
			// Fechar CONEXAO
			//mysqli_close($con);
		?>
	</body>
</html>