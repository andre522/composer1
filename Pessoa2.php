<?php 

class Pessoa {
	
	protected $nome;
	protected $idade;
	protected $altura;

	public function __construct($nome,$idade = null,$altura){
		$this->nome = $nome;
		$this->idade = $idade;
		$this->altura = $altura;
	}

	public function andar(){
		echo 'andando';
	}

	public function identificacao(){
		return "
			Nome: {$this->nome}
			Idade: {$this->idade}
			Altura: {$this->altura}
		";
	}

}

 ?>
