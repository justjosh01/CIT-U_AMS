<?php
class Alumni extends Controller
{ 
	public function __construct(){
		$this->db 	= $this->model('db');
		$this->url 	= $this->url();		

	}

	public function index(){
		$data['title'] = 'Announcements';
 		is_alumni();
 		is_loggedin();
		// $query 			= "SELECT * FROM tbl_quotation WHERE alumni_id='".$_SESSION[ID]."' ORDER BY date_added DESC LIMIT 10";
 	// 	$data['quotations']	= $this->db->getQuery($query);
		$this->view('alumni/header',$data);
		$this->view('alumni/index',$data);
		$this->view('alumni/footer');
	}
 

	public function announcements(){
		$data['title'] = 'Announcements';
		is_alumni();
 		is_loggedin();
		// $query 			= "SELECT * FROM tbl_quotation WHERE alumni_id='".$_SESSION[ID]."' ORDER BY date_added DESC ";
 	// 	$data['quotations']	= $this->db->getQuery($query);
		$this->view('alumni/header',$data);
		$this->view('alumni/announcements',$data);
		$this->view('alumni/footer');
	} 

	public function events(){
		$data['title'] = 'Events';
		is_alumni();
 		is_loggedin();
		// $query 			= "SELECT * FROM tbl_quotation WHERE alumni_id='".$_SESSION[ID]."' ORDER BY date_added DESC ";
 	// 	$data['quotations']	= $this->db->getQuery($query);
		$this->view('alumni/header',$data);
		$this->view('alumni/events',$data);
		$this->view('alumni/events/footer');
	} 

	public function acquaintance(){
		$data['title'] = 'Acquaintance';
		is_alumni();
 		is_loggedin();
		$query 			= "SELECT * FROM tbl_alumni";
 		$data['list']	= $this->db->getQuery($query);
		$data['count']	= $this->db->getCount($query);
		$this->view('alumni/header',$data);
		$this->view('alumni/acquaintance',$data);
		$this->view('alumni/footer');
	} 
 
	public function login(){
	
		if_login($this->url[0]);
		$data['title'] = 'LOGIN';
		if(isset($_POST['submit'])){
			$table = table($this->url[0]);
			$query = "SELECT email,password,id,name,type,email,active FROM tbl_alumni WHERE  email ='". $_POST['email']."' AND password ='".md5($_POST['password'])."' ";
 			$data['user']	= $this->db->getFetch($query);
			$data['count']	= $this->db->getCount($query);

			if($data['count'] > 0){
	 			if($data['user']['active']==1){
					$_SESSION[ID]    =  ($data['user']['id']);
					$_SESSION[NAME]  =  ucwords($data['user']['name']);
					$_SESSION[TYPE]  =  strtoupper($data['user']['type']);
					$_SESSION[EMAIL] =  strtolower($data['user']['email']);
					redirect('alumni/index');
				}else{
			 		$error[] =  "Your account is not yet active";
					$data['error'] = $error;
		 		}
			}else{
				$error[] =  "Invalid email or password.";
				$data['error'] = $error;
			}
		}
		$this->view('alumni/main/header');
		$this->view('alumni/login',$data);
		$this->view('alumni/main/footer');
	}

 	public function logout(){
		logout();
	}


	public function user_profile(){
		$data['title'] = 'User Profile';
		$this->view('alumni/header',$data);
		$this->view('alumni/user_profile',$data);
		$this->view('alumni/footer');
	}

	public function update_profile(){
		$data['title'] = 'Update Profile';
		is_alumni();
 		is_loggedin();
		$id = $_SESSION[ID];
		$alumni 		 = "SELECT * FROM tbl_alumni WHERE id='".$id."'";
 		$data['alumnus']	 = $this->db->getFetch($alumni);
		$data['alumni'] = $this->db->getCount($alumni);
		// $data['country'] = country();
		// $career_field 		 = "SELECT * FROM tbl_career_field ";
 	// 	$data['career_field'] = $this->db->getQuery($career_field);
		$data['alumni'] == true? '':redirect('alumni/index');
			
		if (isset($_POST['submit']) )  {
		// -------------------------------------------------------------
			if(empty($_POST['newpassword'])){
				$newpassword = $data['alumnus']['password'];				
			}else{
				$newpassword = md5($_POST['newpassword']);
			}
			$confirmpassword = md5($_POST['confirmpassword']);
			$check = $this->db->getCount("SELECT * FROM tbl_alumni WHERE id ='". $id."' AND password ='".$confirmpassword."' ");

		if($check>0){
				$Data = array(
					// 'name' 			=> $_POST['name'],
					// 'email' 		=> $_POST['email'],
					// 'degree' 		=> $_POST['degree'],
					'password'		=> $newpassword,
					// 'contact_number'=> $_POST['contact_number'] 
				);


			$edit   = $this->db->update('tbl_alumni',$Data,array('id' => $id ));
			
			if($edit){
				$success[] =  "Save Succesfully!";
				$data['success'] = $success;
 				$alumni 		 = "SELECT * FROM tbl_alumni WHERE id='".$id."'";
 				$data['alumnus']	 = $this->db->getFetch($alumni);
				$_SESSION[NAME]  =  ucwords($data['alumnus']['name']);
				$_SESSION[EMAIL] =  strtolower($data['alumnus']['email']);
			}else{
				$error[] =  "Something Wrong,Please Contact System Administrator";
				$data['error'] = $error;
			}	
		}else{
			$error[] =  "Wrong Current Password";
			$data['error'] = $error;
		}

		// -------------------------------------------------------------

		}
		$this->view('alumni/header',$data);
		$this->view('alumni/update_profile',$data);
		$this->view('alumni/footer');
	}


	public function update_profile1(){
		$data['title'] = 'Update Profile';
		is_alumni();
 		is_loggedin();
		$id = $_SESSION[ID];
		$alumni 		 = "SELECT * FROM tbl_alumni WHERE id='".$id."'";
 		$data['alumnus']	 = $this->db->getFetch($alumni);
		$data['alumni'] = $this->db->getCount($alumni);
		// $data['country'] = country();
		// $career_field 		 = "SELECT * FROM tbl_career_field ";
 	// 	$data['career_field'] = $this->db->getQuery($career_field);
		$data['alumni'] == true? '':redirect('alumni/index');
			
		if (isset($_POST['submit']) )  {
		// -------------------------------------------------------------
			if(empty($_POST['newpassword'])){
				$newpassword = $data['alumnus']['password'];				
			}else{
				$newpassword = md5($_POST['newpassword']);
			}
			$confirmpassword = md5($_POST['confirmpassword']);
			$check = $this->db->getCount("SELECT * FROM tbl_alumni WHERE id ='". $id."' AND password ='".$confirmpassword."' ");

		if($check>0){
				$Data = array(
					'name' 			=> $_POST['name'],
					'email' 		=> $_POST['email'],
					
					'password'		=> $newpassword,
					// 'contact_number'=> $_POST['contact_number'] 
				);


			$edit   = $this->db->update('tbl_alumni',$Data,array('id' => $id ));
			// $delete = $this->db->delete('tbl_salary_range' ,array('alumni_id' => $id));

			// // ------------------------------------------
			// if(isset($_POST['career_field'])):
			// foreach ($_POST['career_field'] as $career_field) {
			// 	$Data = array(
			// 		'alumni_id'=> $data['alumnus']['id'],
			// 		'career_field_id'=> $career_field
			// 	);
			// 	$add = $this->db->insert('tbl_salary_range' ,$Data);
			// 	// $edit = $this->db->update('tbl_image',$Data,array('id' => $image['id'] ));
			// }
			// endif;
			// // ------------------------------------------

			if($edit){
				$success[] =  "Save Succesfully!";
				$data['success'] = $success;
 				$alumni 		 = "SELECT * FROM tbl_alumni WHERE id='".$id."'";
 				$data['alumnus']	 = $this->db->getFetch($alumni);
				$_SESSION[NAME]  =  ucwords($data['alumnus']['name']);
				$_SESSION[EMAIL] =  strtolower($data['alumnus']['email']);
			}else{
				$error[] =  "Something Wrong,Please Contact System Administrator";
				$data['error'] = $error;
			}	
		}else{
			$error[] =  "Wrong Current Password";
			$data['error'] = $error;
		}

		// -------------------------------------------------------------

		}
		$this->view('alumni/header',$data);
		$this->view('alumni/update_profile1',$data);
		$this->view('alumni/footer');
	}

	public function forgot_password(){
		 	 
		$data['title'] = 'Forgot Password';
		if(isset($_POST['submit'])){
			$table = table($this->url[0]);
			$query = "SELECT id,email,name,type FROM tbl_alumni WHERE  email ='". $_POST['email']."' ";
 			$data['user']	= $this->db->getFetch($query);
			$data['count']	= $this->db->getCount($query);
			reset_password($data['user']);
			if($data['count'] > 0){
				$success[] =  "Please check your email and click on the link provided to reset your password.";
				$data['success'] = $success;
				$Data 		= array('date_forgot_password' => date("Y-m-d H:i:s"));
				$condition 	= array('id' =>$data['user']['id'] );
				$edit = $this->db->update('tbl_alumni',$Data,$condition);
			}else{
				$error[] =  "Invalid email";
				$data['error'] = $error;
			}
		}
		$this->view('admins/main/header');
		$this->view('alumni/forgot_password',$data);
		$this->view('admins/main/footer'); 
	}

	public function reset_password(){
		$data['title'] = 'Reset Password';
		$id = d($this->url[0]);
		$alumni 		= "SELECT * FROM tbl_alumni WHERE id='".$id."' ";
 		$data['alumni']= $this->db->getCount($alumni);
		$data['alumnus']	= $this->db->getFetch($alumni);
		if($data['alumnus']['date_forgot_password']=='0000-00-00 00:00:00'){
			redirect('alumni/login');
		}

		if(isset($_POST['submit'])){
			if($_POST['new_password']==$_POST['confirm_password']){
				$edit = $this->db->update('tbl_alumni',array('password' => md5($_POST['new_password']),'date_forgot_password' => '0000-00-00 00:00:00' ),array('id'=>$id));
				if($edit){
					$success[] =  "Save Succesfully!";
					$data['success'] = $success;
				}
			}else{
					$error[] =  "New and Current Password did not match";
					$data['error'] = $error;
			}	
		}
		$this->view('alumni/main/header');
		$this->view('alumni/reset_password',$data);
		$this->view('alumni/main/footer');
	}


}