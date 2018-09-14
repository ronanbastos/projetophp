<!-- Aula05_Componente01.php -->
<?php
	$acao = $_GET["acao"];
	if($acao==null){
		echo "Sem Resposta, voltar para a pagina anterior!!!";
	}else{
		switch($acao) {
			case 1:
				echo "Escolhe 1";
				break;
			case 2:
				echo "Escolhe 2";
				break;
			case 3:
				echo "Escolhe 3";
				break;
		}
	}