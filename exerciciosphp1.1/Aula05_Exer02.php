<!-- Aula05_Exer02.php -->
<html>
	<head>
		<meta charset="UTF-8">
		<title>Aula 5 - E02 - BD01</title>
		<style>
			.button {
				background-color: #4CAF50; /* Green */
				box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
				border: 1px solid green;
				color: white;
				padding: 15px 32px;
				text-align: center;
				text-decoration: none;
				display: inline-block;
				font-size: 16px;
				width: 255px;
			}
			.button:hover {
				background-color: #3e8e41;
			}
		</style>
	</head>
	<body>
		<br>
		<a href="Aula05_Componente01.php?acao=1"><button class="button">Conectar Banco</button></a>
		<br>
		<a href="Aula05_Componente01.php?acao=2"><button class="button">Listagem Banco</button></a>
		<br>
		<a href="Aula05_Componente01.php?acao=3"><button class="button">DesConectar Banco</button></a>
	</body>
</html>