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
<form method="post" id="formularioRegistro">
<?php
	
	
	if(isset($_POST['atualizar'])){
			
			$id = $_GET['id'];
			$nome = $_POST['nomeCliente'];	
			$telefone = $_POST['telefoneCliente'];

			$sql = $conn->prepare("UPDATE dadosCliente SET nome = :nome, telefone = :telefone  WHERE id = :id");
			
			$sql->bindValue(":id", $id);
			$sql->bindValue(":nome", $nome);
			$sql->bindValue(":telefone", $telefone);
			
			$sql->execute();
			header("Location: consulta.php");
			

	}
?>
	<label> <h4>Atualizar cadastro </h4>	</label>
		<input type="hidden" name="id" value="<?php echo $_GET['id']?>" >
		#nome
		<input type="text" name="nomeCliente" placeholder="Nome">
		#telefone
		<input type="text" name="telefoneCliente" placeholder="Telefone">
		#valor
		<input type="text" name="valorPagar" placeholder="Valor" value="R$ "> 
		<br>
		<input type="submit" name="atualizar" value="Atualizar" class="cadastroBD">
		
</form>	


			






</body>
</html>	