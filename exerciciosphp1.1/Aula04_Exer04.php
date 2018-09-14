<!-- Aula04_Exer04.php -->
<html>
	<head>
		<meta charset="UTF-8">
		<title>Aula 4 - E04</title>
	</head>
	<body>
		<?php
			$a = array("cliente 1", 3 => "cliente 2", "cliente 3");
			$a1 = array("cliente 1" => 1000, "cliente 2" => 5000, "cliente 3" => 0);
			$a2 = array(
							array("endereco" => "Rua x, 10",
								"bairro" => "Vila Maria",
								"cidade" => "Sao Paulo"),
							array("endereco" => "Rua xx, 11",
								"bairro" => "Vila Maria2",
								"cidade" => "Sao Paulo Aulo"),
							array("endereco" => "Rua y, 12",
								"bairro" => "Gloria",
								"cidade" => "Vila Velha"),
							array("endereco" => "Rua z, 14",
								"bairro" => "Centro",
								"cidade" => "Curitiba"));
			echo "<pre>";
			print_r($a);
			print_r($a1);
			print_r($a2);
			echo "</pre>";
		?>
	</body>
</html>