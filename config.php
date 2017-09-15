<?php

require 'environment.php';


$config = [];


if(ENVIRONMENT == 'development'){

	define("BASE_URL","http://localhost/classificados_mvc/");

	$config['dbname'] = 'estrutura_mvc';
	$config['host'] = 'localhost';
	$config['dbuser']='root';
	$config['dbpass']='';
}else{

	$config['dbname'] = 'estrutura_mvc';
	$config['host'] = 'localhost';
	$config['dbuser']='root';
	$config['dbpass']='';

}

global $db;

try{

$db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'],$config['dbuser'],$config['dbpass']);


}catch(PDOException $execption){

	echo "Erradoooooooo: ".$e->getMessage();
	exit;

}