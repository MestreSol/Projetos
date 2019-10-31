<?php
	// Declara as variaveis de conexao
	$User = 'root';
	$senha = '';
	$NomeBD = 'universo';
	$email = '';
	
	try{
	// Abre conexao
		$PDO = new PDO('mysql:host=localhost;dbname='.$NomeBD, $User, $senha);
		// Seta os atributos da conexao
		$PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		// Caso ocora um erro
	}catch(PDOException $e){
		echo 'O poblema nao é você... sou eu...';
    }
?>