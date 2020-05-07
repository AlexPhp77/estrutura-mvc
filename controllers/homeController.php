<?php 

class homeController extends controller{	
	
	public function index(){
		
		$n = new Anuncios(); 
		
        $dados = array(
        	'quantidade' => $n->qtAnuncios(),
        );

		$this->loadTemplate('home', $dados);
	}	
}