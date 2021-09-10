<?php

	if(count($_POST)> 0){

		$email = $_POST["email"];
		$senha = $_POST["senha"];

		$servername = "localhost";
		$username = "root";
		$password = "";

		try {
	  		$conn = new PDO("mysql:host=$servername;dbname=Domotica", $username, $password);
	  		// set the PDO error mode to exception
	  		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	  		
	  		$stmt = $conn->prepare("SELECT codigo FROM Usuarios WHERE email=:email AND senha=:senha");
	  		$stmt->bindParam(':email',$email, PDO::PARAM_STR);
	  		$stmt->bindParam(':senha',$senha, PDO::PARAM_STR);
	  		$stmt->execute();

	  		// set the resulting array to associative
	  		$result = $stmt->fetchAll();
	  		$qtd = count($result);
	  		if($qtd == 1){

	  			header("Location: usuario.html");
	  			
	  		}else{

	  			$resultado["msg"] = "Email e Senha não conferem!";
	  			$resultado["cod"] = 0;
	  		}

		} catch(PDOException $e) {
	  		echo "Connection failed: " . $e->getMessage();
		}


		$conn = NULL;

	}

	include("index.php");	
?>	