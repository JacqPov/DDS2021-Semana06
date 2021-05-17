<?php

	class Escola
	{

		public $nome;
		public $cnpj;
		public $endereco;
		public $cidade;
		public $uf;



		public function __construct($values)
		{
			$this->nome = $values["nome"];
			$this->cnpj = $values["cnpj"];
			$this->endereco = $values["endereco"];
			$this->cidade = $values["cidade"];
			$this->uf = $values["uf"];
			
		}

		public function exibir_escola()
		{
			echo "<h3> Escola: </h3>";
			echo "$this->nome($this->cnpj) <br />";
			echo "Endereço: $this->endereco <br />";
			echo "Cidade/UF: $this->cidade / $this->uf <br />";
			
		}
	}







?>