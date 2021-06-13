<?php 
		require_once __DIR__.'/app/Session/Login.php';
		use app\Entity\Funcionario;
		use app\Entity\Cargo;
		use app\Entity\Departamento;
		use app\Db\Pagination;
		use app\Session\Login;

		Login::requireLogin();






include __DIR__.'/includes/header.php';

// print_r($_SESSION['usuario']);EXIT;
?>

<!-- <p>Bem Vindo <?=$nome?></p> -->



<?php

if(		isset($_GET['inc'])		){

	if($_GET['inc'] == 'f'){

		require_once __DIR__.'/app/Entity/Funcionario.php';
		require_once __DIR__.'/app/Db/Pagination.php';


		$cargosOcupados = Funcionario::getFuncs(' p.id_cargo = c.id_cargo
and c.id_departamento = d.id_departamento ', '', '', ' distinct c.cargo as cargo , 
     c.id_cargo as id,
     d.departamento as departamento');

		$ids = [];

		foreach ($cargosOcupados as $id) {
			array_push($ids, $id->id);
		}


		$busca = filter_input(INPUT_GET, 'busca', FILTER_SANITIZE_STRING);

		$cargo = filter_input(INPUT_GET, 'cargo', FILTER_SANITIZE_STRING);

		$cargo = in_array($cargo, $ids)? $cargo : '';
		// echo "<pre>";print_r($cargo);echo "<pre/>";exit;

		$condicoes = [
			' p.id_cargo = c.id_cargo
and c.id_departamento = d.id_departamento ',
			strlen($busca)?  ' p.nome like "%'.str_replace(' ', '%', $busca).'%" 	':null, 
			strlen($cargo)? '  c.id_cargo = '.$cargo : null
		];

		// echo "<pre>"; print_r($condicoes); echo "</pre>";
		$condicoes = array_filter($condicoes);

		// echo "<pre>"; print_r($condicoes); echo "</pre>";

		$where = implode(' and ', $condicoes);

		// echo $where; exit;



		@$qtdFuncs = Funcionario::getQtdFuncs($where);
		//paginação
		$obPagination = new Pagination($qtdFuncs, $_GET['pagina'] ?? 1, 5);

		// echo"<pre>";print_r($obPagination);echo"</pre>;";exit;

		$funcs = Funcionario::getFuncs($where/**/, '', '', " p.id_pessoa as id_pessoa, 
    p.nome as nome , date_format(p.nasc, '%d/%m/%Y') as nasc, 
    concat(c.cargo, ' ', d.departamento) as cargo, 
    p.celular as celular");

		
		

		include __DIR__.'/includes/funcionarios.php';


	}else if($_GET['inc'] == 'c'){

		require_once __DIR__.'/app/Entity/Cargo.php';
		$cargos = Cargo::getCargos(' c.id_departamento = d.id_departamento ', 
			'', '', 'id_cargo, cargo, departamento, salario');

		// echo "<pre>"; print_r($cargos);echo "</pre>";exit;
		
		include __DIR__.'/includes/cargos.php';
	}else if($_GET['inc'] == 'd'){
		require_once __DIR__.'/app/Entity/Departamento.php';
		$departamentos = Departamento::getDeps();

		// echo "<pre>";print_r($departamentos);echo "</pre>";exit;

		include __DIR__.'/includes/departamentos.php';
	}


}else{
	$nome = $_SESSION['usuario']['nome'];?>
		<div class="container">
			<p style="text-align: right; font-size: 1.5em;">Bem vindo <?=$nome?>!</p>
			<p style="text-align: right;"><a href="logout.php" class="abutton voltar">Sair</a></p>
		</div>
	<?php }




include __DIR__.'/includes/footer.php';

 ?>