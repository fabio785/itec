<?php 

if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
	header('location:home.php?inc=d&sts=error');
}


require_once __DIR__.'/app/Entity/Departamento.php';
use app\Entity\Departamento;

$deps = Departamento::getDeps();
$dep = Departamento::getDep('id_departamento = '.$_GET['id']);

if(!($dep instanceof Departamento)){
	header('location:home.php?inc=d&sts=error');
}

if (isset($_POST['departamento'],$_POST['operacao'], $_POST['localizacao'])) {
	$dep->id_departamento = $_GET['id'];
	$dep->departamento = $_POST['departamento'];
	$dep->operação = $_POST['operacao'];
	$dep->localização = $_POST['localizacao'];
	// print_r($dep);exit;
	$dep->atualiza();
	header('location:home.php?inc=d&sts=success');
}

// echo "<pre>";print_r($dep);echo "</pre>";

@DEFINE(TITLE, 'Edição de Departamento');

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/formulariodep.php';