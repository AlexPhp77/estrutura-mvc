<?php

class Core{

	public function comecar(){

		$url = '/';
		if(isset($_GET['url'])){
			$url .= $_GET['url'];
		}
		$params = array();
		if(!empty($url) && $url != '/'){
			$url = explode('/', $url);
			array_shift($url);

			$atualController = $url[0].'Controller';
			array_shift($url);

			if(isset($url[0]) && !empty($url[0])){
				$atualAction = $url[0];
				array_shift($url);
			} else{
				$atualAction = 'index';
			}

			if(count($url) > 0){
				$params = $url; 
			}
			
		} else{
			$atualController = 'homeController';
			$atualAction = 'index';
		}

		echo $atualController."<br/>"; 
	    echo $atualAction."<br/>";
	    print_r($params); 

		
	}
}