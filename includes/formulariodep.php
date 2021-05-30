<?php 
$operacao = '';
$localizacao = '';

foreach ($deps as $op) {
	$operacao .= '<option value="'.$op->operação.'">'.$op->operação.'</option>';
}

foreach ($deps as $loc) {
	$localizacao .= '<option value="'.$loc->localização.'">'.$loc->localização.'</option>';
}
 ?>

<main class="container">

	<h1><?=TITLE?></h1>

	<?= TITLE == 'Exclusão de Departamento'? '<p> Deseja realmente excluir este registro?</p>': '' ?>

	<form class="form-func" method= "post">

		<div class="form-control">	
			<label>Departamento</label>
			<input required="" type="text" value="<?=$dep->departamento?>" <?=TITLE == 'Exclusão de Departamento'? 'readonly': ''?> name="departamento">
 		</div>






 		<div class="form-control">	
			<label>Operação</label>
			<select style="width: 250px; position:absolute;" <?=TITLE == 'Exclusão de Departamento'? 'disabled': ''?> onchange="this.nextElementSibling.value=this.value">
				
				<?=$operacao?>

			</select>

			<input name="operacao" style="width: 220px; margin-top: 7px; border: none; position:relative; left:1px; margin-right: 25px;" <?=TITLE == 'Exclusão de Departamento'? 'readonly': ''?> required placeholder="Digite ou escolha opção →" value="<?=$dep->operação?>"/>
			
 		</div>


 		<div class="form-control">	
			<label>Localização</label>
			<select style="width: 250px; position: absolute;" <?=TITLE == 'Exclusão de Departamento'? 'disabled': ''?> onchange="this.nextElementSibling.value=this.value">
				<option selected="" value="">Selecione</option>
				<?=$localizacao?>
			</select>
			<input name="localizacao" <?=TITLE == 'Exclusão de Departamento'? 'readonly': ''?> style="width: 220px; margin-top: 7px; border: none; position:relative; left:1px; margin-right: 25px;" required placeholder="Digite ou escolha opção →" value="<?=$dep->localização?>"/>
 		</div>
 		<br>


 		<div>
 			<?php if(TITLE == 'Edição de Departamento'){ ?>
 				<a>
					<button type="submit" class="abutton edit">
						 <img src="img/user.png"> Salvar
					</button>
				</a>
 			<?php }else if(TITLE == 'Exclusão de Departamento'){?>
 				<a>
					<button type="submit" class="abutton exc">
						 <img src="img/user.png"> Excluir
					</button>
				</a>
 			<?php }else{ ?>
 				<a>
					<button type="submit" class="abutton cad">
						 <img src="img/plus.png"> Cadastrar
					</button>
				</a>
			<?php }?>
			<a href="home.php?inc=d" class="abutton voltar">
	 			<img src="img/seta-curva.png"> Voltar
	 		</a>
 		</div>
 		
	</form>
</main>

