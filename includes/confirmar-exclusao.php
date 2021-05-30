<?php 
$resultado = '';



foreach ($cargos as $cargo) {
	$selected = $func->id_cargo == $cargo->id_cargo? "selected": " ";
	$resultado .= '<option '.$selected.'  value="'.$cargo->id_cargo.'" >'.$cargo->cargo.'</option>';
}


 ?>

<main class="container" >
	<h1>Exclusão de Registro</h1>

	<form method="POST" class="form-func">
		<div class="form-control">		
			<label>Nome</label>
			<input type="text" name="nome" required="" disabled value="<?=$func->nome?>">
		</div>
		<div class="form-control">
			<label>Sexo</label>
			<select name="sexo" required="" disabled >
				<option selected="" value="">Selecione</option>
				<option <?=$func->sexo == 'm'? 'selected': ''?> value="m">Masculino</option>
				<option <?=$func->sexo == 'f'? 'selected': ''?> value="f">Feminino</option>
				</select>
		</div>

		<div class="form-control">
			<label>Celular</label>
			<input type="number" disabled name="celular" required="" value="<?=$func->celular?>">
		</div>


		<div class="form-control">		
			<label>Data de Nascimento</label>
			<input type="date" name="data" required="" disabled value="<?=$func->nasc?>">
		</div>


		<div class="form-control">
			<label>Telefone</label>
			<input type="number" name="telefone" disabled required="" value="<?=$func->telefone?>">
		</div>

		<div class="form-control">
			<label>
				Selecione o Cargo:
			</label>
			<select name="id_cargo" disabled required="">
				<option selected="" value="">Selecione</option>
				<?=$resultado?>
			</select>
		</div>

				<a>
					<button class="abutton exc" name="excluir">
	 					<img src="img/delete.png"> Excluir
	 				</button>
	 			</a>

	 			<a href="home.php?inc=f" class="abutton voltar">
	 				<img src="img/seta-curva.png"> Voltar
	 			</a>
			
	</form>
</main>