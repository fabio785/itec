<?php 
require_once 'app/Entity/Cargo.php';
require_once 'app/Entity/Departamento.php';
use app\Entity\Cargo;
use app\Entity\Departamento;

$deps = Departamento::getDeps('','','', 'id_departamento, departamento, localização ');

// print_r($deps);exit;

$cargo = new Cargo;

if(isset($_POST['cargo'], $_POST['departamento'], $_POST['salario'] )){
	
	$cargo->cargo = $_POST['cargo'];
	$cargo->id_departamento = $_POST['departamento'];
	$cargo->salario = $_POST['salario'] ;
	$cargo->cadastrar();

	// echo "<pre>";print_r($cargo);echo "</pre>";exit;
	header('location:home.php?inc=c&sts=success');
}

@DEFINE(TITLE, 'Inclusão de cargo');
include __DIR__.'/includes/header.php';
include __DIR__.'/includes/formulariocargo.php';

 ?>

