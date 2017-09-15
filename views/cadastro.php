<div class="container-fluid">
	<div class="row">
		
		<div class="col-sm-4">

		</div>


				<div class="col-sm-4">

				<h1>Cadastro</h1>
				<hr>

				<form method="post" action="cadastro">
					
				<div class="form-group">Nome		
				<input name="nome" type="text" class="form-control">
				</div>

				<div class="form-group">Email		
				<input name="email" type="email" class="form-control">
				</div>
			
				<div class="form-group">Senha		
				<input name="senha" type="password" class="form-control">
				</div>

				<div class="form-group">Telefone		
				<input name="tel" type="text" class="form-control">
				</div>

				<button id="confirmar" onclick="mostra()" class="btn btn-primary" type="submit">Confirmar</button>

				</form>
					<br>
				
				<?php  
				if(isset($sucesso) && !empty($sucesso)){ 
				?>
					<div class="alert alert-success" role="alert"><?php echo $sucesso; ?></div>
				<?php
				}else{
						?><div id="r" class="alert alert-danger" role="alert">Não se cadastrou</div>

				<?php

				}
				?>
				


					
		

		</div>


		<div class="col-sm-4">
		</div>

	</div>
</div>