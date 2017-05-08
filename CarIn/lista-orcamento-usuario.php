<?php
	session_start();

	require_once "../connect_database.php";
	$usuario = $_SESSION['usuario'];


	$sqlQuery = "SELECT ds_valor_maodeobra_orcamento as ValorMaoDeObra FROM tb_orcamento WHERE cd_usuario = "
	.$usuario->Codigo;

		$orcamento = $pdo->query($sqlQuery);
		//echo $orcamento;
		$orcamento = $orcamento->fetchObject($obj)	
		or die("Você não possui nenhum orçamento.");
	

	echo $orcamento;
?>