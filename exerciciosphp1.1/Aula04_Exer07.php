<!-- Aula04_Exer07.php -->
<html>
	<head>
		<meta charset="UTF-8">
		<title>Aula 4 - E07</title>
	</head>
	<body>
		<?php
			$con = mysqli_connect('localhost', 'root', '', 'test');
			if (!$con) {
				die('Não foi possível conectar: ' . mysqli_error());
			}else{
				echo 'Conexão bem sucedida';
			}
			mysqli_close($con);
			
		?>
	</body>
</html>