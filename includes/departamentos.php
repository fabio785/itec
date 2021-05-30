<?php 
	$resultado = '';
	foreach ($departamentos as $dep) {
		$resultado .='<tr>
				<td>'.$dep->id_departamento.'</td>
				<td>'.$dep->departamento.'</td>
				<td>'.$dep->operação.'</td>
				<td>'.$dep->localização.'</td>
				<td class="acoes">
				<a href="editar-dep.php?id='.$dep->id_departamento.'" class="abutton">
				<button class="edit">
					<img src="img/user.png">Editar
				</button>
				</a>
				<a href="excluir-dep.php?id='.$dep->id_departamento.'" class="abutton">
				<button class="exc">
					<img src="img/delete.png">Excluir
				</button>
				</a>
				</td>
				</tr>';
	}
 ?>
<main class="container">

	<a href="form-dep.php" class="abutton">
		<button style="min-width: 220px" class="cad">
			<img src="img/plus.png" style="width: 8%; padding-top: 5px;">
			Novo Departamento
		</button>
	</a>

	<h1>Departamentos</h1>

	<table>
		<thead>
			<th>Id</th>
			<th>Departamento</th>
			<th>Operação</th>
			<th>Localização</th>
			<th>Ações</th>
		</thead>
		<tbody>
			
			<?=$resultado ?>
		</tbody>
	</table>
	
</main>