<!-- Aula06_E01_pagina.php -->
<?php
	$logado = "Sem usuario";
	session_start();
	if(isset($_SESSION['usuario'])	){
		$logado = $_SESSION['usuario'];
	}
?>
<!DOCTYPE>
<html lang="pt-br">
	<head>
		<title></title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="container" style="background: #cecece">
			<div class="row" style="background: #696969">
				&nbsp;
				<font color="white">
					<a href="Aula06_E01_logout.html">
						Olá, <?php echo $logado;?>
					</a>
				</font>
			</div>
			<div class="row" style="background: #dedede">
				&nbsp;
			</div>
		</div>
	</body>
</html>