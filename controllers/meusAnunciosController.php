<?php


class meusAnunciosController extends controller{


	public function index(){

		$dados = [];


		$a = new Anuncios();

		$dados['lista']=$a->getMeusAnuncios();

		$this->loadTemplate('meusAnuncios',$dados);




	}

	public function addAnuncio(){

		$dados = [];

		$c = new Categorias();

		$dados['lista']=$c->getLista();

		

		$a = new Anuncios();

		$titulo=isset($_POST['titulo'])?addslashes($_POST['titulo']):'';
		$categoria=isset($_POST['categoria'])?addslashes($_POST['categoria']):'';
		$valor=isset($_POST['valor'])?addslashes($_POST['valor']):'';
		$desc=isset($_POST['desc'])?addslashes($_POST['desc']):'';
		$estado=isset($_POST['estado'])?addslashes($_POST['estado']):'';



		

		if(isset($titulo) && !empty($titulo)){

		$a->addAnuncio($titulo,$categoria,$valor,$desc,$estado);
		$dados['suc']="Anuncio cadastrado com sucesso";
		}



		$this->loadTemplate('addAnuncio',$dados);
	}

	

	public function excluirAnuncio($id){

		if(!empty($_SESSION['cLogin'])){

		$a = new Anuncios();
		$a->excluirAnuncio($id);

		header("Location:".BASE_URL."meusAnuncios");

	}

	 

	}


}