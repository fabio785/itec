<?php 
	$msg = '';

	if (isset($_GET['sts'])) {
		if($_GET['sts']=='success'){
			$msg = '<p class="modalsuccess" id="modalsuccess">Operação efetuada com Sucesso! <button class="fechar" id="fecharsuccess">X</button></p>';
		}else if($_GET['sts']=='error'){
			$msg = '<p class="modalerror" id="modalerror">
			Operação não efetuada! 
			<button class="fecharerror" id="fecharerror">
				X
			</button>
		</p>';
		}
	}

	/**/$resultado = '';

	foreach ($funcs as $func) {
		$resultado .='
					<tr>
						<td>'.$func->id_pessoa.'</td>
						<td>'.$func->nome.'</td>
						<td>'.$func->cargo.'</td>
						<td>'.$func->nasc.'</td>
						<td>'.$func->celular.'</td>
						<td class="acoes">
							<a class="abutton " href="edit.php?id='.$func->id_pessoa.'">
 								<button class="edit">
 									<img src="img/user.png"> Editar
 								</button>
 							</a>
  							<a class="abutton " id="'.$func->id_pessoa.'" href="excluir.php?id='.$func->id_pessoa.'" >
 								<button class="exc">
 									<img src="img/delete.png"> Excluir
 								</button>
 							</a>

						</td>
					 	</tr>
					 	';
	}

	echo $msg;

 ?>

<main class="container">

	<a href="form-func.php" class="abutton">
		<button class="cad">
			<img src="img/plus.png">
			Cadastrar
		</button>
	</a>
	<h1>Quadro de funcionarios</h1>
	<table>
		<thead>
			<th>N° de Mat.</th>
			<th>Nome</th>
			<th>Cargo</th>
			<th>Nascimento</th>
			<th>Celular</th>
			<th>Ações</th>
		</thead>
		<tbody>
			<?=$resultado?>
		</tbody>
	</table>
</main>

<div class="bg-modal">
	<div class="modal">
		
	</div>
</div>

<script type="text/javascript">
	let fecharsuccess = document.getElementById('fecharsuccess')
	let modalsuccess = document.getElementById('modalsuccess')

	if(fecharsuccess)
	fecharsuccess.onclick = () => {modalsuccess.style.display="none"}

	let fecharerror = document.getElementById('fecharerror')
	let modalerror = document.getElementById('modalerror')

	if(fecharerror)
	fecharerror.onclick = () =>{modalerror.style.display="none"}
	

</script>