<?php

	class Escola
	{

		public $nome;
		public $codigo;
		public $professor;
		public $cargaHoraria;


		public function __construct($values)
		{
			$this->nome = $values["nome"];
			$this->codigo = $values["codigo"];
			$this->professor = $values["professor"];
			$this->cargaHoraria = $values["cargaHoraria"];
			
		}

		public function exibir_disciplina()
		{
			echo "<h3> Disciplina: </h3>";
			echo "$this->nome($this->codigo) <br />";
			echo "Professor: $this->professor <br />";
			echo "Carga Horária: $this->cargaHoraria  <br />";
			
		}
	}




?>