<?php
include 'conexao.inc';

$nome = $_POST['pastel'];
$del = "DELETE FROM tarefa where nome='$nome'";

$querydel = mysqli_query($conexao, $del); 
header('location: visualiza.php')
?>