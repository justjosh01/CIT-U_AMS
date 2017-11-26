<?php

class User extends Controller
{ 
	public function __construct(){
		$this->db 	= $this->model('db');
		$this->url 	= $this->url();		
	}

	public function index(){
	 	
	 
	}

 
	public function logout(){
		logout();
	}


}



?>

