<?php 
		use app\Entity\Funcionario;
		use app\Entity\Cargo;
		use app\Entity\Departamento;





include __DIR__.'/includes/header.php';

if(		isset($_GET['inc'])		){

	if($_GET['inc'] == 'f'){
		require_once __DIR__.'/app/Entity/Funcionario.php';
		$funcs = Funcionario::getFuncs('  p.id_cargo = c.id_cargo
and c.id_departamento = d.id_departamento ', '', '', " p.id_pessoa as id_pessoa, 
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


}




include __DIR__.'/includes/footer.php';

 ?>