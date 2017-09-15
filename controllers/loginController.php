<?php

class loginController extends controller{


	public function index(){

		$dados=array();

		
		$dados['erro']=0;
				

				$a = new Usuarios();

				$email=isset($_POST['email'])?$_POST['email']:'';
				$senha=isset($_POST['senha'])?$_POST['senha']:'';


				if(!empty($email) && !empty($senha)){

				

				$retorno=$a->login($email,$senha);

							if($retorno){

							header("Location:".BASE_URL);

							}else{

							$dados['erro']=1;
							
								
							}
				}else if((empty($email) && !empty($senha)) || (!empty($email) && empty($senha))){

					$dados['vazio']=-1;
				}

				$this->loadTemplate('login',$dados);
	}


	public function sair(){

		unset($_SESSION['cLogin']);
		header("Location:".BASE_URL);
	}





} 