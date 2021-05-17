<?php
	require_once "classeDisciplina.php";
	session_start();

	foreach ($_SESSION["disciplinas"] as $i => $d) {
		$d->exibir_disciplina();
	}


?>