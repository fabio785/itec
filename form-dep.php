<?php 

require_once __DIR__.'/app/Entity/Departamento.php';
use app\Entity\Departamento;

$deps = Departamento::getDeps();
// echo "<pre>";print_r($deps);echo "</pre>"; exit;

@DEFINE(TITLE, 'Inclusão de departamento');

	$dep = new Departamento;
if (isset($_POST['departamento'],$_POST['operacao'], $_POST['localizacao'])) {
	// print_r($_POST);exit;
	$dep->departamento = $_POST['departamento'];
	$dep->operação = $_POST['operacao'];
	$dep->localização = $_POST['localizacao'];
	$dep->cadastrar();

	header('location:home.php?inc=d&sts=success');

}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/formulariodep.php';
 ?>