<?php
	echo "<i>Equacao : x²-3x-10=0</i><br><br>";
	$a = 1; // 1  4  1
	$b = -3; // -3  8  -4
	$c = -10; // -10  6  -5
	echo "<b>Resultado</b><br>";
	$delta = ($b*$b)-((4*$a*$c));
	echo "Delta: " . $delta . "<br>";
	$raiz = sqrt($delta);
	echo "Raiz: " . $raiz . "<br>";
	$x1 = (-($b)+($raiz))/ (2*$a);
	echo "x"."'".": " . $x1 . "<br>";
	$x2 = (-($b)-($raiz)) / (2*$a);
	echo "x".'"'.": " . $x2 . "<br>";
?>