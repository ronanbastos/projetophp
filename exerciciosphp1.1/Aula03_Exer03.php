<!-- Aula03_Exer03.php -->
<?php
	$msg ="";
	$usu = $_POST["usuario"];
	$sen = $_POST["senha"];
	if(($usu == "")||($sen == "")){
		$msg = "Campo(s) Vazio(s)!!!";
	}else{
		$msg = "Ola, " . $usu;
	}
?>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Aula 03 - Resultado</title>
	</head>
	<body>
		<?php echo $msg; ?>
	</body>
</html>