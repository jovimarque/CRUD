<?php

require_once("sql.php");

?>
</body>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Sistema</title>
	<link rel="stylesheet" type="text/css" href="index.css">

	<style type="text/css">
		
	table{
		margin:10px;
	}
	table thead{
		margin:10px;
	}
	table td{
		border:1px solid black;
		padding:10px;
	}
	</style>
</head>
<body>

<nav id="menu">	
		<ul>	
			<li>	
				<a href="index.php">
					#Registrar
				</a>
			</li>
			<li>	
				<a href="consulta.php">
					#Consultar
				</a>
			</li>
		</ul>
		
</nav>
<body>
	

	<table>
		<tr>
			<thead>
				<th>#</th>
				<th>Nome</th>
				<th>Telefone</th>
				<th>Valor</th>
				<th>Configurar</th>
			</thead>
		</tr>
			<tr>
		<?php

				$sql = $conn->prepare("SELECT * FROM dadosCliente");
				$sql->execute();
			$consulta = 	$sql->fetchAll();

				foreach ($consulta as $consultar ) {
					
				

		?>
		<tbody>
			<td>
			 <?php echo $consultar['id'];?>
			</td>	
			<td>
			 <?php echo $consultar['nome'];?>
			</td>
			<td>
			 <?php echo $consultar['telefone'];?>
			</td>
			<td>
			 <?php echo $consultar['valor'];?>
			</td>
			<td>
				<a href="deletar.php?id=<?php echo $consultar['id'];?>"> Excluir</a>
				<a href="atualizar.php?id=<?php echo $consultar['id'];?>">Editar</a>

			</td>
					</tbody>
					<?php
						}
					?>	
			</tr>
	</table>

</body>
</html>