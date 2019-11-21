<?<?php
	$servidor = "localhost";
	$usuario = "usuario_exemplo";
	$senha = "teste";
	$dbname = "bdexemplo";
	
	//Criar a conexao
	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
	
	if(!$conn){
		die("Falha na conexao: " . mysqli_connect_error());
	}else{
		//echo "Conexao realizada com sucesso";
	}	
	
?>