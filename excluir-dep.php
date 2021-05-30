<?php 

if(!isset($_GET['id']) || !is_numeric($_GET['id'])){
	header('location:home.php?inc=d&sts=error');
}

require_once __DIR__.'/app/Entity/Departamento.php';
use app\Entity\Departamento;

$dep = Departamento::getDep('id_departamento = '.$_GET['id']);
$deps = Departamento::getDeps();

if (!($dep instanceof Departamento)) {
	header('location:home.php?inc=d&sts=error');
}

if (isset($_POST['departamento'],$_POST['operacao'], $_POST['localizacao'])) {
	// print_r($dep);exit;
	$dep->id_departamento = $_GET['id'];
	$dep->excluir();
	header('location:home.php?inc=d&sts=success');
}

@DEFINE(TITLE, 'Exclusão de Departamento');

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/formulariodep.php';