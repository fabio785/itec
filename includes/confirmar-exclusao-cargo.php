<?php 
$departamentos = '';


foreach ($deps as $dep){
	$selected = $cargo->id_departamento == $dep->id_departamento? 'selected': '';
	$departamentos .='<option '.$selected.' value="'.$dep->id_departamento.'">'.$dep->departamento.' - '.$dep->localização.'</option>';
}

 ?>

 <main class="container">
 	<h1><?=TITLE?></h1>

 	<form class="form-func" method="post">
 		<div class="form-control">	
 			<label>Função</label>
 			<input disabled type="text" required="" name="cargo" value="<?=$cargo->cargo?>">
 		</div>

  		<div class="form-control">	
 			<label>Departamento</label>
 			<select disabled required="" name="departamento">	
 				<option selected="" value="">Selecione</option>
 				<?=$departamentos?>
 				</select>
 		</div>	

 		<div class="form-control">	
 			<label>Salário</label>
 			<input disabled type="number" <?= TITLE == 'Edição de Registro'?  'value="'.$cargo->salario.'"': 'placeholder="2000,00"'; ?>   required name="salario">
 		</div>


 		<div>
 			<a>
				<button type="submit" class="abutton exc" name="excluir">
					 <img src="img/user.png"> Excluir
				</button>
			</a>
			<a href="home.php?inc=c" class="abutton voltar">
	 			<img src="img/seta-curva.png"> Voltar
	 		</a>
 		</div>	
 		
 	</form>
 </main>