<?php 
	$resultado = '';
	foreach ($cargos as $cargo) {
		$salario = str_replace(".", ",", $cargo->salario );
		$resultado .= '<tr>
				<td>'.$cargo->id_cargo.'</td>
				<td>'.$cargo->cargo.'</td>
				<td>'.$cargo->departamento.'</td>
				<td>R$'.$salario.'</td>
				<td class="acoes">
				<a class="abutton" href="editar-cargo.php?id='.$cargo->id_cargo.'">
					<button class="edit">
						<img src="img/user.png">Editar
					</button>
				</a>

				<a class="abutton" href="excluir-cargo.php?id='.$cargo->id_cargo.'">
					<button class="exc">
						<img src="img/delete.png">Excluir
					</button>
				</a>
			</td>
			</tr>';
	}
 ?>
<main class="container">

	<a href="form-cargo.php" class="abutton">
		<button class="cad">
			<img src="img/plus.png">
			Novo Cargo
		</button>
	</a>

	<h1>Quadro de Cargos</h1>

	<table>
		<thead>
			<th>id</th>
			<th>Função</th>
			<th>Departamento</th>
			<th>Salário Liq.</th>
			<th colspan="2">Ações</th>
		</thead>
		<tbody>
			
			<?=$resultado?>
		</tbody>
	</table>
</main>