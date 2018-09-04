<?php 

require_once('Pessoa.php');
require_once('Pessoa2.php');
require_once('vendor/autoload.php');

//use Projeto\Pessoa;

$pessoa = new Projeto\Pessoa('José',25,1.80);
$pessoa2 = new \Pessoa('Maria',35,1.60);

$pessoa->andar();
$pessoa2->andar();
echo $pessoa->identificacao();




 ?>