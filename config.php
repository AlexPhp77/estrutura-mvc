<?php 
require "define.php";

class Conexao{

	public function __construct(){

		$config = array();

		if(MEIO == 'developer'){
			define("BASE_URL", "http://localhost/sistemas/teste");
			$config['dbname'] = 'blog';
			$config['host'] = 'localhost';
			$config['dbuser'] = 'root';
			$config['dbpass'] = '';
		} else{
			define("BASE_URL", "http://meusite.com/");
			$config['dbname'] = 'blog';
			$config['host'] = 'localhost';
			$config['dbuser'] = 'root';
			$config['dbpass'] = '';
		}

		try{
	        $pdo = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass']); 
		} catch(PDOException $e){
			echo "Erro conexão: ".$e->getMessage();
			exit;
		}
	}
}

