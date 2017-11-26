<?php

class Controller  
{
	
	public function model($model)
	{

		require_once 'app/models/' . $model . '.php';
		return new $model();
	
	}
	 
	public function view($view, $data = [], $fields = [])
	{
		$var = 'app/views/' . $view . '.php';	 

		(file_exists($var))?require_once $var:'';
		
		 
	
	}

	
 	public function url()
	{
		if(isset($_GET['url'])){
			$url = explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
			return $url;
		} 	
	}

} 