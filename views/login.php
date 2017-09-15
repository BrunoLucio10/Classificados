<div class="container-fluid">


	<div class="row">
		


		<div class="col-md-4">
			
		</div>

		<div class="col-md-4">

			<h1>Login</h1>
			<hr>
			
			<form method="post" action="login">
				
			<div class="form-group">Email
			<input name="email" type="email" class="form-control">
			</div>

			<div class="form-group">Senha
			<input name="senha" type="password" class="form-control">
			</div>


			<button type="submit" class="btn btn-primary">Logar</button>

			</form>

			<br>

			<?php 
			
			if($erro==1){
				?>
					  <div class="alert alert-danger" role="alert">
					  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
					  <span class="sr-only">Erro:</span>
					  Email e/ou senhas incorretos.
					  </div>
				<?php
			}
				
				
			$vazio=isset($vazio)?$vazio:0;

			if($vazio==-1){

					?><div class="alert alert-danger" role="alert">
					  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
					  <span class="sr-only">Erro:</span>
					  Preencha os campos vazios.
					  </div>
 				<?php		}	 ?>
			
			

		</div>

		<div class="col-md-4">
			
		</div>









	</div>
	



</div>