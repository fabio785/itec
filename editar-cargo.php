<?php 
require_once __DIR__.'/app/Entity/Cargo.php';
require_once __DIR__.'/app/Entity/Departamento.php';
use app\Entity\Cargo;
use app\Entity\Departamento;

if(!isset($_GET['id']) || !is_numeric($_GET['id'])){
	header('location:home.php?inc=c&sts=error');
}

$deps = Departamento::getDeps();

$cargo = Cargo::getCargo('id_cargo = '.$_GET['id']);

if(!($cargo instanceof Cargo)){
	header('location:home.php?inc=c&sts=error');
}

if(isset($_POST['cargo'], $_POST['departamento'], $_POST['salario'])){
	$iCargo = new Cargo;
	$iCargo->atualiza('id_cargo = '.$_GET['id'],
					["cargo"=>$_POST['cargo'], 
					"id_departamento"=>$_POST['departamento'], 
					"salario"=>$_POST['salario']]);


	header('location:home.php?inc=c&sts=success');
}

@DEFINE(TITLE, 'Edição de Registro');

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/formulariocargo.php';

 ?>