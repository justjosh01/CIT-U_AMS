<?php

$table = table($this->url[0]);



		if(isset($_POST['submit'])){
			
			$query = "SELECT email,password FROM ".$table." WHERE  email ='". $_POST['email']."' AND password ='".md5($_POST['password'])."' ";

 			$data['list']	= $this->db->getQuery($query);
			$data['count']	= $this->db->getCount($query);

			if($data['count'] > 0){
				redirect('alumni/index');
			}else{
				$data['errors'] = 'please try again';
			}
			
		}