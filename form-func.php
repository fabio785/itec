<?php 
require_once __DIR__.'/app/Entity/Cargo.php';
require_once __DIR__.'/app/Entity/Funcionario.php';
use app\Entity\Funcionario;
use app\Entity\Cargo;

@DEFINE(TITLE, 'Cadastro de Funcionário');

$func = new Funcionario;
if(isset($_POST['nome'], $_POST['sexo'], $_POST['data'], $_POST['celular'], $_POST['telefone'], $_POST['id_cargo'] )){
	$func->nome = $_POST['nome'];
	$func->sexo = $_POST['sexo'];
	$func->nasc = $_POST['data'];
	$func->celular = $_POST['celular'];
	$func->telefone = $_POST['telefone'];
	$func->id_cargo = $_POST['id_cargo'];
	$func->cadastrar();


	header('location:home.php?inc=f&sts=success');	
}



include __DIR__.'/includes/header.php';


$cargos = Cargo::getCargos('c.id_departamento = d.id_departamento', '', '', 'id_cargo, concat(c.cargo, " - ", d.departamento) as cargo'); 
		
include __DIR__.'/includes/formulario.php';
 ?>