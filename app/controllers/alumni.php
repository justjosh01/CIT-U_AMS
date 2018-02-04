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


	public function activate(){
		 	 
		$data['title'] = 'Activate';
		if(isset($_POST['submit'])){
			$table = table($this->url[0]);
			$query = "SELECT id,email,name,type,token, active FROM tbl_alumni WHERE  email ='". $_POST['email']."' ";
 			$data['user']	= $this->db->getFetch($query);
			$data['count']	= $this->db->getCount($query);
			activate_account($data['user']['email'], $data['user']['name'], $data['user']['token'], $data['user']['type']);
			if($data['count']==1 && $data['user']['active']==0){
				$success[] 		=  "Please check your email and click on the link provided to activate your account.";
				$data['success']= $success;
			}elseif($data['user']['active']==1){
				$error[] =  "Email already active";
				$data['error'] = $error;
			}else{
				$error[] =  "Email doesn't exists";
				$data['error'] = $error;
			}
		}
		$this->view('alumni/main/header');
		$this->view('alumni/activate',$data);
		$this->view('alumni/main/footer'); 
	}
	
	public function activate_account(){
		 
		isset($this->url[2]) ? '':redirect('/');
		$Data 		= array('active' => 1, 'date_activated' => date("Y-m-d H:i:s"));
		$condition 	= array('token' => $this->url[2] );
		$edit = $this->db->update('tbl_alumni',$Data,$condition);
		if($edit){
			$success[] =  "Account activated you can now login!";
			$data['success'] = $success;
				$this->view('alumni/main/header');
				$this->view('alumni/login',$data);
				$this->view('alumni/main/footer');
			
		} 


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
 		$id = $_SESSION[ID];
		$query 			= "SELECT * FROM tbl_alumni where id !='". $id."' ";
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
		$id                   				= $_SESSION[ID];
		$alumni 		      				= "SELECT * FROM tbl_alumni WHERE id='".$id."'";
 		$data['alumnus']     				= $this->db->getFetch($alumni);
		$data['alumni']   	  				= $this->db->getCount($alumni);
		$data['gender']       				= gender();
		$data['civil_status'] 				= civil_status();
		$data['degree']       				= degree();
		$data['year']         				= year();
		$data['employment_status']         	= employment_status();
		$data['past_employment_status']    	= past_employment_status();
		$data['sector']         		   	= sector();
		$data['career_field']               = career_field();
		$data['salary_range']            	= salary_range();
		$data['work_status']             	= work_status();
		$data['job_aligned']         		= job_aligned();
		$data['location']           		= country();

		// $career_field 		 = "SELECT * FROM tbl_career_field ";
 	// 	$data['career_field'] = $this->db->getQuery($career_field);
		$data['alumni'] == true? '':redirect('alumni/update_profile');
			
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
					'alumni_id' 				=> $_POST['alumni_id'],
					'name'              		=> $_POST['name'],
					'mailing_address'   		=> $_POST['mailing_address'],
					'gender'            		=> $_POST['gender'],
					'date_of_birth'     		=> $_POST['date_of_birth'],
					'place_of_birth'            => $_POST['place_of_birth'],
					'home_address'				=> $_POST['home_address'],
					'citizenship'				=> $_POST['citizenship'],
					'civil_status'      		=> $_POST['civil_status'],
					'email' 		    		=> $_POST['email'],
					'contact_number'    		=> $_POST['contact_number'],
					'location'		            => $_POST['location'],

					'elementary'        		=> $_POST['elementary'],
					'secondary'         		=> $_POST['secondary'],
					'tertiary'          		=> $_POST['tertiary'],
					'degree' 		    		=> $_POST['degree'],
					'year_graduated'    		=> $_POST['year_graduated'],
					'date_of_graduation'        => $_POST['date_of_graduation'],

					'employment_status'   		=> $_POST['employment_status'],
					'year_hired_or_fired' 		=> $_POST['year_hired_or_fired'],
					'sector'              		=> $_POST['sector'],
					'career_field' 	      		=> $_POST['career_field'],
					'work_status'         		=> $_POST['work_status'],
					'is_job_aligned'      		=> $_POST['is_job_aligned'],
					'position'         	  		=> $_POST['position'],
					'salary_range'        		=> $_POST['salary_range'],
					'company_name'        		=> $_POST['company_name'],
					'company_address'           => $_POST['company_address'],

					'past_employment_status'    => $_POST['past_employment_status'],
					'past_year_hired_or_fired'  => $_POST['past_year_hired_or_fired'],
					'past_sector'               => $_POST['past_sector'],
					'past_career_field' 	    => $_POST['past_career_field'],
					'past_work_status'          => $_POST['past_work_status'],
					'is_past_job_aligned'       => $_POST['is_past_job_aligned'],
					'past_position'             => $_POST['past_position'],
					'past_salary_range'         => $_POST['past_salary_range'],
					'past_company_name'         => $_POST['past_company_name'],
					'past_company_address'      => $_POST['past_company_address'],

					'award'                     => $_POST['award'],
					'date_given'                => $_POST['date_given'],
					'awarding_body'             => $_POST['awarding_body'],

					'testimony_personal_family' => $_POST['testimony_personal_family'],
					'testimony_career'          => $_POST['testimony_career'],
					'testimony_community'       => $_POST['testimony_community'],

					'recovery_email'            => $_POST['recovery_email'],
					'username'                  => $_POST['username'],
					'password'		            => $newpassword,
				);


			$edit   = $this->db->update('tbl_alumni',$Data,array('id' => $id ));
			
			if($edit){
				$success[] =  "Save Succesfully!";
				$data['success'] = $success;
 				$alumni 		 = "SELECT * FROM tbl_alumni WHERE id='".$id."'";
 				$data['alumnus'] = $this->db->getFetch($alumni);
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
		$this->view('alumni/main/header');
		$this->view('alumni/forgot_password',$data);
		$this->view('alumni/main/footer'); 
	}

	public function reset_password(){
		$data['title'] = 'Reset Password';
		$id = d($this->url[0]);
		$query 		= "SELECT * FROM tbl_alumni WHERE id='".$id."' ";
		$data['user']	= $this->db->getFetch($query);
		$data['count']	= $this->db->getCount($query);
		if($data['user']['date_forgot_password']=='0000-00-00 00:00:00'){
			redirect('alumni/login');
		}

		if(isset($_POST['submit'])){
			if($_POST['new_password']==$_POST['confirm_password']){
				$Data = array('password' => md5($_POST['new_password']),'date_forgot_password' => '0000-00-00 00:00:00' );
				$condition = array('id'=>$data['user']['id']);
				$edit = $this->db->update('tbl_alumni', $Data, $condition);
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