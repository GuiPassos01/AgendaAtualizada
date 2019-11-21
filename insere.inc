<?php
	
include 'conexao.inc';

$data = $_POST['data'];
$nome =  $_POST['nome'];
$descricao =  $_POST['desc'];

$sql = "INSERT INTO tarefa VALUES";
$sql .= "( '$data','$nome', '$descricao')";

	if ($conexao ->query($sql) === TRUE) {
	
			echo "Tarefa salva com sucesso!";
			header('Location:tarefa.html');
	} else {

			echo "Erro ao salvar tarefa." . $sql . "<br>" .$conexao->error;
	}

$conexao->close();


?>