<?php if(empty($_SESSION['cLogin'])){

		header("Location:".BASE_URL);
		exit;
	}  
	
	?>

<div class="container-fluid">


	<div class="row">
		

		<div class="col-md-4">
			
		</div>

		<div class="col-md-4">

			<h1>Adicionar Anuncios</h1>
			<hr>
			
			<form method="post" enctype="multipart/form-data">
				
			<div class="form-group">Titulo
				<input name="titulo" type="text" class="form-control"/>
			</div>

			<div class="form-group">Categoria
				<select name="categoria" id="categoria" class="form-control">
				<?php foreach($lista as $list){ ?>
					<option value="<?php echo $list['id']; ?>"><?php echo utf8_encode($list['nome']); ?></option>
					<?php } ?>	

				</select>
			</div>

			<div class="form-group">Valor
				<input name="valor" type="text" class="form-control"/>
			</div>

			<div class="form-group">Descrição
				<textarea name="desc" type="text" class="form-control"></textarea>
			</div>

			<div class="form-group">Estado de Conservação:
			<select name="estado" id="estado" class="form-control">
				<option value="0">Ruim</option>
				<option value="1">Bom</option>
				<option value="2">Ótimo</option>
			</select>
		</div>
		

		<button type="submit" class="btn btn-success">Adicionar</button>


			</form>

			<br>

			<?php

			if(isset($suc)){ ?> <div class="alert alert-success" role="alert"> 
			Anuncio editado com sucesso </div>

			<?php } ?>
			
		</div>

		<div class="col-md-4">
			
		</div>









	</div>
	



</div>
