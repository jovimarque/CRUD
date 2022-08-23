	<?php
		require_once("sql.php");

					

					try{
						if(isset($_GET['id'])){
				 			$id = $_GET['id'];

							$sql = $conn->prepare("DELETE FROM `dadosCliente` WHERE id = :id");
							$sql->bindValue(":id",$id);
							$sql->execute();
							header('Location:consulta.php');

			
							}

						
						}catch(Exception $e){


							echo "Erro  |".$e->getMessage(). " | Contate o desenvolvedor";

						}

				
			
			?>