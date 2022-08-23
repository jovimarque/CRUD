<?php

require_once("sql.php");

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Sistema</title>
	<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>

<nav id="menu">	
		<ul>	
			<li>	
				<a href="#">
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

<form method="post" id="formularioRegistro">
	<label> <h4>Cadastro de Serviço </h4>	</label>
		<input type="hidden" name="atualizar" value="<?php echo $_GET['id'];?>">
		#nome
		<input type="text" name="nomeCliente" placeholder="Nome" >
		#telefone
		<input type="text" name="telefoneCliente" placeholder="Telefone">
		#valor
		<input type="text" name="valorPagar" placeholder="Valor" value="R$ "> 
		<br>
		<input type="submit" name="cadastrar" value="Registrar" class="cadastroBD">
		

		<?php

		try{

			if(isset($_POST['cadastrar'])){
				
				$nome = $_POST['nomeCliente'];
				$telefone = $_POST['telefoneCliente'];	
				$valor = $_POST['valorPagar'];
			
			$stmt = $conn->prepare("INSERT INTO `dadoscliente` (nome,telefone,valor) VALUES(:nome ,:telefone, :valor)");
				$stmt->bindParam(":nome", $nome);
				$stmt->bindParam(":telefone", $telefone);
				$stmt->bindParam(":valor", $valor);
				
				$stmt->execute();

				echo 'Cadastrado com sucesso';
			}


		}catch(Exception $e){

			echo "Erro |" .$e->getMessage(). " Contate o desenvolvedor";
		}



		?>

</form>

	



</body>
</html>