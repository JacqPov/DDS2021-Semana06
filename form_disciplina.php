<?php  
	if(!empty($_POST))
	{
		session_start();
		include "classeDisciplina.php";
		$d = new Disciplina($_POST);
		$_SESSION["disciplinas"][] = $d;

	}


 ?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title> Cadastro Disciplina </title>
	</head>

	<body>
		<h1> Cadastro Disciplina </h1>
		<form method="post">
    		<input type="text" name="nome" placeholder="Nome da Disciplina..." /> <br />
    		<input type="text" name="codigo" placeholder="Código..." /> <br />
    		<input type="text" name="professor" placeholder="Professor(a)..." /> <br />
    		<input type="number" name="cargaHoraria" placeholder="Carga Horária..." /> <br />
    		<button> Enviar </button>
		</form><br />
		
	</body>
</html>