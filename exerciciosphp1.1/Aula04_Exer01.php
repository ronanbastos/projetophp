<!-- Aula04_Exer01.php -->
<html>
	<head>
		<meta charset="UTF-8">
		<title>Aula 4 - E01</title>
	</head>
	<body>
		<?php
			for($i=0;$i<=10;$i++){
		?>
		<p><font color="red">Valor de $i:<?=$i?></font>
		<?php
			if($i%2==0){
		?>
		&nbsp; [PAR]
		<?php
			}else{
				echo "&nbsp; [IMPAR]";
			}
		?>
		</p>
		<?php
			}
		?>
	</body>
</html>