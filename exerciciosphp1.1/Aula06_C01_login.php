
<!-- Aula06_C01_login.php -->

<?php

	$usuario = $_POST["txtUsu"];
	$senha = $_POST["txtSen"];
	
	if(($usuario == "")||($senha == "")){
		header("Location: paginaErroLogin.php");
	}else{
		$con = mysqli_connect('localhost', 'root', '', 'banco');
		$sql = "SELECT * FROM cliente WHERE usuCli='$usuario' and senCli='$senha';";
		$resultado = mysqli_query($con, $sql);
		if ($resultado->num_rows>0) {
			while($linha = $resultado->fetch_assoc()) {
				header("Location: Aula06_E01_pagina.php");
				session_start();
				$_SESSION['usuario'] = $linha['nomeCli']; 
			}
		} else {
			header("Location: paginaErroLogin.php");
		}
		$resultado->close();
		mysqli_close($con);
	}