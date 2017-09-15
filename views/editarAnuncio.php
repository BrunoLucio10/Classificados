<?php if(empty($_SESSION['cLogin'])){

	header("Location:".BASE_URL);
	exit;
		}
	// FAZER UM CONTROLLER PRO EDITAR
	?>


<div class="container-fluid">


	<div class="row">
		


		<div class="col-md-4">
		
		</div>

		<div class="col-md-4">

			<h1>Editar Anuncios</h1>
			<hr>
			
			<form method="POST" enctype="multipart/form-data">
				
			<div class="form-group">Titulo
				<input name="titulo" type="text" class="form-control" value="<?php 
				echo $info['titulo'] ?>" />
			</div>

			<div class="form-group">Categoria
				<select name="categoria" id="categoria" class="form-control">
				<?php foreach($lista as $list){ ?>
					<option value="<?php echo $list['id']; ?>"<?php echo 
					($info['id_categoria']==$list['id'])?'selected="selected"':''; ?> ><?php echo utf8_encode($list['nome']); ?></option>
					<?php } ?>	

				</select>
			</div>

			<div class="form-group">Valor
				<input name="valor" type="text" class="form-control" value="<?php echo $info['valor'] ?>"/>
			</div>

			<div class="form-group">Descrição
				<textarea name="desc" type="text" class="form-control"><?php echo $info['descricao']; ?></textarea>
			</div>

			<div class="form-group">Estado de Conservação:
			<select name="estado" id="estado" class="form-control">
				<option value="0"<?php echo ($info['estado']=='0')?'selected="selected"':''; ?> >Ruim</option>
				<option value="1"<?php echo ($info['estado']=='1')?'selected="selected"':''; ?> >Bom</option>
				<option value="2"<?php echo ($info['estado']=='2')?'selected="selected"':''; ?> >Ótimo</option>
			</select>
		</div>

		<div class="form-group">Fotos
				<input type="file" name="fotos[]" multiple/>
			</div>

			<div class="panel panel-default">
				<div class="panel-heading">Fotos do Anúncio</div>
				<div class="panel-body">	
					<?php foreach($info['fotos'] as $foto): ?>
					<div class="foto_item">
						
						
					<img src="<?php echo BASE_URL; ?>assets/images/anuncios/<?php echo $foto['url']; ?>" border="0"><br><br>

						<a href="<?php echo BASE_URL; ?>editar/excluirFot/<?php echo $foto['id_anuncio']; ?>/<?php echo $foto['id']?>" class="btn btn-default">Excluir Imagem</a>
					</div>
					<?php endforeach; ?>

				</div>

				</div>

		<button type="submit" class="btn btn-primary">Salvar</button>


			</form>

			<br>

	<?php
			if(isset($suc)){ ?> <div class="alert alert-success" role="alert"> 
			Anuncio editado com sucesso </div>

			<?php }  ?>
		</div>

		<div class="col-md-4">
			
		</div>








	</div>
	



</div>