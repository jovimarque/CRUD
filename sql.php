<?php
try{
	
	$conn = new PDO("mysql:host=localhost;dbname=agendamento","root","");

	if(isset($conn)):

			echo " Status servidor: Conectado";
	endif;		
	

}catch(Exception $e){
	
	echo "Erro  |" .$e->getMessage(). "| Por favor contate o desenvolvedor";

}

?>