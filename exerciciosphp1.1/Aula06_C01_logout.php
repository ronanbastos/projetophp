
<!-- Aula06_C01_logout.php -->

<?php
	session_start();
	unset($_SESSION["usuario"]);
	header("Location: Aula06_E01_login.html");