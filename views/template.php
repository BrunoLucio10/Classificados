<!DOCTYPE html>
<html lang="pt-br">

	<head>

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Classificados MVC</title>

	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/style.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/bootstrap.min.css"/>

	</head>


	

	<body>


	<!-- Nav -->
	<nav class="navbar navbar-default">
		<div class="container">
			<div class="navbar-header">
				<a href="<?php echo BASE_URL; ?>" class="navbar-brand"><img class="img-logo" src="<?php BASE_URL; ?>assets/images/apigee.svg"></a>
				
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#barra">
		
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>

				</button>
			</div>
			<div class="collapse navbar-collapse" id="barra">
			<ul class="nav navbar-nav navbar-right">
				<?php if(isset($_SESSION['cLogin']) && !empty($_SESSION['cLogin'])): ?>
					<li><a href="<?php echo BASE_URL; ?>meusAnuncios">Meus Anúncios</a></li>
					<li><a href="<?php echo BASE_URL; ?>login/sair">Sair</a></li>
				<?php else: ?>
					<li><a href="<?php echo BASE_URL; ?>cadastro">Cadastre-se</a></li>
					<li><a href="<?php echo BASE_URL; ?>login">Login</a></li>
				<?php endif; ?>
			</ul>
			</div>
		</div>
	</nav>

	<!-- body -->
	<?php $this->loadInTemplate($viewName, $viewData); ?>




<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/script.js"></script>
	</body>

</html>
