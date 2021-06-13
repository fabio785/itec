<?php 

require_once __DIR__.'/app/Entity/Funcionario.php';
require_once __DIR__.'/app/Entity/Cargo.php';
use app\Entity\Funcionario;
use app\Entity\Cargo;



if (!isset($_GET['id']) || !is_numeric($_GET['id'])){
	header('location:home.php?inc=f&sts=error');
}	

@DEFINE(TITLE, 'Edição de Funcionário');

	include __DIR__.'/includes/header.php';

	$func = Funcionario::getFunc($_GET['id']);

	if(!($func instanceof Funcionario)){
		header('location:home.php?inc=f&sts=error');
	}

	$cargos = Cargo::getCargos('c.id_departamento = d.id_departamento', '', '', 'id_cargo, concat(c.cargo, " - ", d.departamento) as cargo');

	if(isset($_POST['nome'], $_POST['sexo'], $_POST['data'], $_POST['celular'], $_POST['telefone'], $_POST['id_cargo'] )){
		//$func->id_pessoa = $_GET['id'];
		$func->nome = $_POST['nome'];
		$func->sexo = $_POST['sexo'];
		$func->nasc = $_POST['data'];
		$func->celular = $_POST['celular'];
		$func->telefone = $_POST['telefone'];
		$func->id_cargo = $_POST['id_cargo'];
		$func->usuario = $_POST['usuario'];
		$func->senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
		$func->atualizar();

		header('location:home.php?inc=f&sts=success');
	}


	include __DIR__.'/includes/formulario.php';
 ?>