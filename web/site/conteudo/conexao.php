<?php
	$servidor = "sql11.freesqldatabase.com";
	$usuario = "sql11450485";
	$senha = "bPaA9mbIMi";
	$dbname = "sql11450485";
	
	//Criar a conexao
	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
	
	if(!$conn){
		die("Falha na conexao: " . mysqli_connect_error());
	}else{
		//echo "Conexao realizada com sucesso";
	}	
	
?>