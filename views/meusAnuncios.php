<?php if(empty($_SESSION['cLogin'])){

		header("Location:".BASE_URL);
		exit;
	}  


	
	?>

<div class="container-fluid">


	<div class="row">
		

		<div class="col-md-3">
			
		</div>

		<div class="col-md-6">

			<h1>Meus Anuncios</h1>
			<hr>
			
			<a href="meusAnuncios/addAnuncio" class="btn btn-default">Adicionar Anuncio</a>


				<table class="table table-striped">
				<thead>
					<tr>
						<th>Foto</th>
						<th>Titulo</th>
						<th>Valor</th>
						<th>Ações</th>
					</tr>
				</thead>
				<tr>
				<?php  foreach($lista as $list) { ?>
					<td> 
						<?php if(!empty($list['url'])){ ?>
					<img src="<?php echo BASE_URL; ?>assets/images/anuncios/<?php 
					echo $list['url']; ?>" height="50" />
							<?php	}else{  ?>

					<img src="<?php echo BASE_URL; ?>assets/images/default.jpg" height="50" />

							<?php } ?>
					</td>
					<td> <?php echo $list['titulo']; ?> </td>
					<td>R$ <?php echo number_format($list['valor'],2); ?></td>
					<td>
						<a href="editar/editarAnuncio/<?php echo $list['id']; ?>" class="btn btn-default">Editar</a>
						<a href="meusAnuncios/excluirAnuncio/<?php echo $list['id']; ?>" class="btn btn-danger">Excluir</a>

					</td>
				</tr>
				<?php } ?>
				</table>
		</div>

		<div class="col-md-3">
			
		</div>









	</div>
	



</div>


