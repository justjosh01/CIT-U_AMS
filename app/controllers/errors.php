<?php

class Errors extends Controller
{ 

	public function __construct(){
	 
	}

	public function index(){

		$data['title'] = "ERROR PAGE";

 
		$this->view('page/error',$data);
 

	}  
 

 

}