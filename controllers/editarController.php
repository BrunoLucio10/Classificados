<?php

class editarController extends controller {




	public function index(){

		$dados = [];


		$a = new Anuncios();

		$dados['lista']=$a->getMeusAnuncios();

		$this->loadTemplate('meusAnuncios',$dados);


	}

public function editarAnuncio($id){

		$dados = [];


		$a= new Anuncios();

		$c = new Categorias();


		$titulo=isset($_POST['titulo'])?$_POST['titulo']:'';
		$categoria=isset($_POST['categoria'])?$_POST['categoria']:'';
		$valor=isset($_POST['valor'])?$_POST['valor']:'';
		$desc=isset($_POST['desc'])?$_POST['desc']:'';
		$estado=isset($_POST['estado'])?$_POST['estado']:'';
		$fotos=isset($_FILES['fotos'])?$_FILES['fotos']:array();



		if(isset($titulo) && !empty($titulo)){
		
		$a->editAnuncio($titulo,$categoria,$valor,$desc,$estado,$fotos,$id);
		$dados['suc']="Anuncio editado com sucesso";

		}


		$dados['lista']=$c->getLista();

		$dados['info']=$a->getAnuncio($id);



		$this->loadTemplate('editarAnuncio',$dados);


	}


	public function excluirFot($id,$idFoto){

		if(!empty($_SESSION['cLogin'])){

		$a=new Anuncios();

		$a->excluirFoto($idFoto);

		header("Location:".BASE_URL."editar/editarAnuncio/$id");

		}
	}



}