<?php

	#EM ORDEM('Localização do BD', 'usuario', 'senha', 'nome do bd')
	$conexao = mysqli_connect('localhost', 'usuario_exemplo', 'teste', 'bdexemplo');

	mysqli_set_charset($conexao, 'utf8');

	if ($conexao ->connect_error) {
		die('Falha ao realizar a conexao:' . $conexao->conect_error);
	}

?>