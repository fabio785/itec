<?php 

require_once __DIR__.'/app/Entity/Funcionario.php';
require_once __DIR__.'/app/Entity/Cargo.php';
use app\Entity\Funcionario;
use app\Entity\Cargo;


if (!isset($_GET['id']) || !is_numeric($_GET['id'])){
	header('location:home.php?inc=f&sts=error');
}	


	$func = Funcionario::getFunc($_GET['id']);

	if(!($func instanceof Funcionario)){
		header('location:home.php?inc=f&sts=error');
	}

	$cargos = Cargo::getCargos('c.id_departamento = d.id_departamento', '', '', 'id_cargo, concat(c.cargo, " - ", d.departamento) as cargo');

	// echo "<pre>";print_r($func);echo "</pre>";exit;

	if(isset($_POST['excluir'])){
		//$func->id_pessoa = $_GET['id'];
		$func->excluir();

		header('location:home.php?inc=f&sts=success');
	}


	include __DIR__.'/includes/header.php';
	include __DIR__.'/includes/confirmar-exclusao.php';
 ?>