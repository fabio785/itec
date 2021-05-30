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

if(isset($_POST['excluir'])){
	$iCargo = new Cargo;
	$iCargo->excluir('id_cargo = '.$_GET['id']);


	header('location:home.php?inc=c&sts=success');
}

@DEFINE(TITLE, 'Edição de Registro');

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/confirmar-exclusao-cargo.php';

 ?>