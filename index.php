<?php 

if(isset($_GET['sts']) && $_GET['sts'] == 'errorLogin'){
	echo '<script>alert("Login ou senha inválidos")</script>';
}

require_once __DIR__.'/app/Session/Login.php';
require_once __DIR__.'/app/Entity/Usuario.php';
use app\Session\Login;
use app\Entity\Usuario;

Login::requireLogout();



if(isset($_POST['acao'], $_POST['usuario'], $_POST['senha'])){

	$obUsuario = Usuario::getUsuarioPorUsuario($_POST['usuario']);
	if(!$obUsuario instanceof Usuario || !password_verify($_POST['senha'], $obUsuario->senha)){
		header('location:index.php?sts=errorLogin');
		exit;
		
	}
	// $obUsuario->usuario = $_POST['usuario'];
	// $obUsuario->senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
	// echo "<pre>";print_r($obUsuario);echo "</pre>";exit;


	Login::login($obUsuario);

}

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Itec</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<nav class="container">
		<a href="#">
			<img src="img/logo.jpg">
		</a>
		<ul>
			<li><a href="#">Cadastro</a></li>
			<li><a href="#">Contatos</a></li>
			<li><a href="#">Parceiros</a></li>
			<li><a href="#">Quem somos</a></li>
		</ul>
	</nav>

	<div class="slide container">
		<div class="container">
			<h1>Itec</h1>
			<p>Somos uma empresa cujo o principal objetivo é ajudar na gestão de pessoas,</p>
			<p>prestando serviço ao departamento de recursos humanos de diversas instituições.</p>

			<button style="cursor: pointer" id="login"><a >acessar sistema</a></button>
		</div>

	</div>



	<div class="login-bg" id="login-bg">
		<form class="form-func" method="post">
		<img  src="img/logo.jpg">
		 <br>
			<div class="form-control">
				<label>Usuário</label>
				<input type="text" required name="usuario">
			</div>
			<br>
			<div class="form-control">
				<label>Senha</label>
				<input type="password" required name="senha">
				<p class="esqueci"><a href="">Esqueci Usuário/Senha</a></p>
			</div>	
			<br>
			<div class="form-control">
				
					<button type="submit" name="acao" value="logar" id="acessar" class="edit abutton">Acessar</button>
				
				
					<button style="float: right;" id="voltar" class="abutton voltar">Voltar</button>
				
			</div>
		</form>
	</div>


	<script type="text/javascript">
		let login = document.getElementById('login')
		let loginbg = document.getElementById('login-bg')
		let voltar = document.getElementById('voltar')

		login.onclick = ()=>{
			loginbg.style.top = '0';
		}

		voltar.onclick= () =>{
			loginbg.style.top = '-100%'
		}
	</script>

</body>
</html>