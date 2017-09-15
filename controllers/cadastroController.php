<?php 

class cadastroController extends controller{
	

	public function index(){

			$dados=array();

			$nome=isset($_POST['nome'])?$_POST['nome']:'';
			$email=isset($_POST['email'])?$_POST['email']:'';
			$senha=isset($_POST['senha'])?$_POST['senha']:'';
			$tel=isset($_POST['tel'])?$_POST['tel']:'';

			$usuarios = new Usuarios();

			if(!empty($nome)){
				$usuarios->cadastrar($nome,$email,$senha,$tel);
				$dados['sucesso']='Sucesso ao se Cadastrar';
				}

			$this->loadTemplate('cadastro',$dados);


			

			



	}



}