<?php  
	if(!empty($_POST))
	{
		session_start();
		include "classeEscola.php";
		$e = new Escola($_POST);
		$_SESSION["escolas"][] = $e;

	}


 ?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title> Cadastro Escola </title>
	</head>

	<body>
		<h1> Cadastro Escola </h1>
		<form method="post">
    		<input type="text" name="nome" placeholder="Nome da escola..." /> <br />
    		<input type="text" name="cnpj" placeholder="CNPJ..." /> <br />
    		<input type="text" name="endereco" placeholder="Endereço..." /> <br />
    		<input type="text" name="cidade" placeholder="Cidade..." /> <br />
    		<input type="text" name="uf" placeholder="Estado..." /> <br />
    		<button> Enviar </button>
		</form><br />
		
	</body>
</html>