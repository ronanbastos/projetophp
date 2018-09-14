<!-- Aula03_Exer02.php -->
<?php
	$codigo = $_GET["codigo"];
	$nome = $_GET["nome"];
	$quantidade = $_GET["quantidade"];
	$preco = $_GET["preco"];
?>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Aula 03 - Resultado</title>
		<style>
			fieldset{width: 250px;}
		</style>
	</head>
	<body>
		<fieldset>
			<p>Codigo do Produto: <?php echo $codigo; ?></p>
			<p>Nome do Produto: <?php echo $nome; ?></p>
			<p>Quantidade do Produto: <?php echo $quantidade; ?></p>
			<p>Preco do Produto: <?php echo $preco; ?></p>
		</fieldset>
		<br>
		<a href="Aula03_Exer02.html">Voltar</a>
	</body>
</html>