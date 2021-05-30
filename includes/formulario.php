<?php 

$resultado = '';



foreach ($cargos as $cargo) {
	$selected = $func->id_cargo == $cargo->id_cargo? "selected": " ";
	$resultado .= '<option '.$selected.'  value="'.$cargo->id_cargo.'" >'.$cargo->cargo.'</option>';
}


 ?>

<main class="container" >
	<h1><?=TITLE?></h1>

	<form method="POST" class="form-func">
		<div class="form-control">		
			<label>Nome</label>
			<input type="text" name="nome" required="" value="<?=$func->nome?>">
		</div>
		<div class="form-control">
			<label>Sexo</label>
			<select name="sexo" required="" >
				<option selected="" value="">Selecione</option>
				<option <?=$func->sexo == 'm'? 'selected': ''?> value="m">Masculino</option>
				<option <?=$func->sexo == 'f'? 'selected': ''?> value="f">Feminino</option>
				</select>
		</div>

		<div class="form-control">
			<label>Celular</label>
			<input type="number" name="celular" required="" value="<?=$func->celular?>">
		</div>


		<div class="form-control">		
			<label>Data de Nascimento</label>
			<input type="date" name="data" required="" value="<?=$func->nasc?>">
		</div>


		<div class="form-control">
			<label>Telefone</label>
			<input type="number" name="telefone" required="" value="<?=$func->telefone?>">
		</div>

		<div class="form-control">
			<label>
				Selecione o Cargo:
			</label>
			<select name="id_cargo" required="">
				<option selected="" value="">Selecione</option>
				<?=$resultado?>
			</select>
		</div>







		
		<?php if(TITLE == 'Edição de Funcionário'){ ?>
				<a>
					<button class="abutton edit">
	 					<img src="img/user.png"> Editar
	 				</button>
	 			</a>

	 			<a href="home.php?inc=f" class="abutton voltar">
	 				<img src="img/seta-curva.png"> Voltar
	 			</a>
			<?php }else{ ?>
				<a>
					<button type="submit" class="abutton cad">
						 <img src="img/plus.png"> Cadastrar
					</button>
				</a>
				<a href="home.php?inc=f" class="abutton voltar">
	 				<img src="img/seta-curva.png"> Voltar
	 			</a>
			<?php } ?>
	</form>
</main>