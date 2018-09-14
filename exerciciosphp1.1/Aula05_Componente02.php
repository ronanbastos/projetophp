<!-- Aula05_Componente02.php -->
<?php

	$click = $_GET["acao"];

	class Manipula{
		
		function Conecta(){
			$con = mysqli_connect('localhost', 'root', '', 'banco');
			if (!$con) {
				die('Não foi possível conectar: ' . mysqli_error());
				header("Location: paginaErro.php");
			}
			header("Location: paginaConecta.php");
		}
		
		function Consulta(){
			$con = mysqli_connect('localhost', 'root', '', 'banco');
			$sql = "SELECT * FROM cliente;";
			$resultado = mysqli_query($con, $sql);
			if ($resultado->num_rows>0) {
				while($linha = $resultado->fetch_assoc()) {
					echo "id: " . $linha["idCli"]. " - Nome: " . $linha["nomeCli"]. "<br>";
				}
			} else {
				echo "0 resultados";
			}
		}
		
		function Desconecta(){
			//$resultado->close();
			mysqli_close($con);
			header("Location: paginaDesconecta.php");
		}
	}
	
	$chama = new Manipula;
	
	if($click==null){
		echo "Sem Resposta, voltar para a pagina anterior!!!";
	}else{
		switch($click) {
			case 1:
				$chama->Conecta();
				break;
			case 2:
				$chama->Consulta();
				break;
			case 3:
				$chama->Desconecta();
				break;
		}
	}
	
	
	
	
	
	
	
	
	
	