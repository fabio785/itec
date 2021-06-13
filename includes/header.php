<?php 
	require_once 'C:/xampp/htdocs/itec/app/Session/Login.php';
	use app\Session\Login;

	$usuarioLogado = Login::getUsuarioLogado();

	// echo "<pre>";print_r($usuarioLogado);echo "</pre>";exit;


 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="./css/style.css">
</head>
<body>
	<nav class="container">
		<a href="home.php">
			<img src="img/logo.jpg">
		</a>
		<ul>
			<li><a href="home.php?inc=f">Funcionários</a></li>
			<li><a href="home.php?inc=c">Cargos</a></li>
			<li><a href="home.php?inc=d">Departamentos</a></li>
		</ul>

	</nav>



