<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	
	<title>Agenda</title>


		<!-- Javascript -->
	<script type="text/javascript" src="js/js.js"></script>

	<meta name="viewport" content="width=device-width, initial-scale=1">

	 <!-- Fontes -->
    <link href="https://fonts.googleapis.com/css?family=Dosis&display=swap" rel="stylesheet">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

	<link rel="stylesheet" href="http://code.jquery.com/ui/1.9.0/themes/base/jquery-ui.css" />

	<script src="http://code.jquery.com/jquery-1.8.2.js"></script>

	<script src="http://code.jquery.com/ui/1.9.0/jquery-ui.js"></script>

	<!-- CSS -->
    <style type="text/css">

    body{
        background-image: url(img/a.jpg);
      }
    h3{
        color: white;
      }
    .interface{
      background-color: black;
      border-color: white;
      border-style: solid;
      border-width: 1px;
      border-radius: 3%;
      margin-left: 30%;
      margin-right: 30%;
      margin-top: 5%;
      padding: 1%;
    }
    #img1{
      width: 16%;
    }
    p{
    	font-size: 15px;
    }
    a{
      color: black;
    }
    a:hover{
      text-decoration-line: none;
      color: black;
    }
    table{
      border-width: 1%;
  	  border-color: white;
  	  color: white;
    }
    th{
    	width: 20%;
    	padding: 5%;
    	text-align: center;
    }
	td{
		text-align: center;
	}
    </style>

</head>
<body>
<div class="interface">
	
	<br>

			<center><img src="img/calendar.png" id="img1"></center>

		 		<br>

		 	<center><h3>Agenda</h3></center>

    <br>
    <div class="box"> 
<center>
<?php

$sql= "SELECT * FROM `tarefa` order by data";

$conexao = mysqli_connect('localhost', 'usuario_exemplo', 'teste', 'bdexemplo');

$result = mysqli_query($conexao, $sql) or die(mysql_error()); 

echo 
"<table border=''> 
<tr>
<th>Data</th>
<th>Nome</th>
<th>Descrição</th>
</tr>";

while($row = mysqli_fetch_assoc($result))
{
echo "<tr>";
echo "<td>" . $row['data'] . "</td>";
echo "<td>" . $row['nome'] . "</td>";
echo "<td>" . $row['descricao'] . "</td>";
echo "</tr>";
}
echo "</table>";
?>

<br>

<form action="funcaoapagar.php" method="post" style="margin-left: 40%;">

  
  <p style="color: white;">Selecione uma tarefa para apagar:</p>
  <select name="pastel">
    <option>Selecionar...</option>

    <?php
    $consulta = "SELECT * FROM tarefa order by data";
    $queryconsulta = mysqli_query($conexao, $consulta);

    while ($dado = mysqli_fetch_array($queryconsulta)) {
    ?>
      
    <option value="<?php echo $dado['nome']; ?>"><?php echo $dado['nome']; ?></option>

    <?php }; ?>

  </select>

<br>
<br>

  <input type="submit" name="salva" class="btn btn-primary" value="Apagar tarefa">
</form>
</center>
	</div>
</div>
</body>
</html>