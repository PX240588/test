<?php
	$servidor = "amin.orgfree.com";
	$usuario = "347121";
	$senha = "312820po";
	$dbname = "347121";
	
	//Criar a conexao
	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
	
	if(!$conn){
		die("Falha na conexao: " . mysqli_connect_error());
	}else{
		//echo "Conexao realizada com sucesso";
	}	
	
?>