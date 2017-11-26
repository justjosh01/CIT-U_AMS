<?php
class Admins extends Controller
{ 
	public function __construct(){
		$this->db 	= $this->model('db');
		$this->url 	= $this->url();		

	}

	public function index(){
	
		$data['title'] = 'Dashboard';
 		is_admin();
 		is_loggedin();
		$alumni 			= "SELECT * FROM tbl_alumni";
 		$data['alumnus']		= $this->db->getQuery($alumni);
		$data['alumni']	= $this->db->getCount($alumni);
		$admins 			= "SELECT * FROM tbl_admins";
 		$data['admins']		= $this->db->getCount($admins);
		// $announcements 			= "SELECT * FROM tbl_announcements";
 	// 	$data['announcements']	= $this->db->getCount($announcements);
		// $events 		= "SELECT * FROM tbl_events	";
 	// 	$data['events']	= $this->db->getCount($events);
		$this->view('admins/header',$data);
		$this->view('admins/index',$data);
		$this->view('admins/footer');
	}	

	public function alumni(){

		$data['title'] = 'Alumni';
		is_admin();
		is_loggedin();
		$query 			= "SELECT * FROM tbl_alumni";
 		$data['alumnus']	= $this->db->getQuery($query);
		$data['alumni']	= $this->db->getCount($query);
		$this->view('admins/header',$data);
		$this->view('admins/alumni',$data);
		$this->view('admins/footer');
	}

	public function add_alumni(){
		$data['title'] = 'Add Alumni';
        is_admin();
        is_loggedin();
       
        $data['alumni']         = array();
            

        if (isset($_POST['submit']) )  {
            $Data = array(
                'alumni_id'       => $_POST['alumni_id'],
                'name'            => $_POST['name'],
                'email'           => $_POST['email'],
                'contact_number'  => $_POST['contact_number'],
                'date_of_birth'   => $_POST['date_of_birth'],
                'gender'          => $_POST['gender'],
                // 'year_graduated'  => $_POST['year_graduated'],
                
                'password'        => md5($_POST['alumni_id']),
                'type'            => "alumni",
                'active'          => 1,
                'token'           => md5($_POST['email'].uniqid(rand()))
            );

            $data['alumni']    = $this->db->getCount("SELECT * FROM tbl_alumni WHERE email='".$Data['email']."'");
 
            if($data['alumni'] == 0){
                // verify_email($Data['email'],$Data['name'],$Data['token'],$Data['type']);
                $add = $this->db->insert('tbl_alumni' ,$Data);
                $lastID = $this->db->conn->lastInsertId();

                if($lastID == 0){
                   $lastID = 1;
                }

                        
                if($add){
                    $success[] =  "Save Succesfully!";
                    $data['success'] = $success;

                    $alumni 		 	= "SELECT * FROM tbl_alumni WHERE alumni_id='".$Data['alumni_id']."'";
                    $data['alumnus']	 = $this->db->getFetch($alumni);
                }else{
                    $error[] =  "Something Wrong,Please Contact System Administrator";
                    $data['error'] = $error;
                }

            }else{
                $error[] =  "Email is already exists";
                $data['error'] = $error;
            }
        }
            $this->view('admins/header',$data);
            $this->view('admins/alumni/form',$data);
            $this->view('admins/footer');
      }

	public function update_alumni(){

		is_admin();
		is_loggedin();
		isset($this->url[2]) ? '':redirect('alumni/lists');
		$id = d($this->url[2]);
 		$alumni 		 	= "SELECT * FROM tbl_alumni WHERE id='".$id."'";
 		$data['alumnus']	= $this->db->getFetch($alumni);
		$data['alumni'] 	= $this->db->getCount($alumni);
		
		$data['alumni'] 	== true? '':redirect('admins/alumni');
		$newimage = '';

 		if(isset($_POST['submit'])){

		$password = empty($_POST['password']) ?  $data['alumni']['password'] : md5($_POST['password']);

			$Data = array(
				'alumni_id' 		=> $_POST['alumni_id'],
				'password' 			=> md5($_POST['alumni_id']),
				'name' 				=> $_POST['name'],
				'email' 			=> $_POST['email'],
				'contact_number' 	=> $_POST['contact_number'],
				'gender' 	        => $_POST['gender'],
				);


			$edit = $this->db->update('tbl_alumni' ,$Data, array('id' =>$id));



			if($edit){
				$success[] =  "Save Succesfully!";
				$data['success'] = $success;

				$data['alumnus']	 = $this->db->getFetch($alumni);
				

			}else{
				$error[] =  "Something Wrong,Please Contact System Administrator";
				$data['error'] = $error;
			}
		} 
		$this->view('admins/header',$data);
		$this->view('admins/alumni/form',$data);
		$this->view('admins/footer');
	}

	public function delete_alumni(){


		is_admin();
		is_loggedin();
		isset($this->url[2]) ? '':redirect('alumni/lists');
		$id = d($this->url[2]);
 		$alumni 		 	= "SELECT * FROM tbl_alumni WHERE id='".$id."'";
 		$data['alumnus']	 	= $this->db->getFetch($alumni);
		$data['alumni'] 	= $this->db->getCount($alumni);
		$data['alumni'] 	== true? '':redirect('admins/alumni');
		
		$delete = $this->db->delete('tbl_alumni' , array('id' =>$id));
			if($delete){
				$success[] =  "Save Succesfully!";
				$data['success'] = $success;

				redirect('admins/alumni');

			}else{
				$error[] =  "Something Wrong,Please Contact System Administrator";
				$data['error'] = $error;
			}
		
		$this->view('admins/header',$data);
		$this->view('admins/alumni',$data);
		$this->view('admins/footer');
	}

	public function events(){
		$data['title'] = 'Events';
		is_admin();
 		is_loggedin();
		// $query 			= "SELECT * FROM tbl_events WHERE alumni_id='".$_SESSION[ID]."' ORDER BY date_added DESC ";
 	// 	$data['events']	= $this->db->getQuery($query);
		$this->view('admins/header',$data);
		$this->view('admins/events',$data);
		$this->view('admins/events/footer');
	}
	
	


	public function announcements(){

		$data['title'] = 'Announcements';
		is_admin();
 		is_loggedin();
		// $query 			= "SELECT * FROM tbl_announcements WHERE user_id='".$_SESSION[ID]."' ORDER BY date_added DESC";
 	// 	$data['list']	= $this->db->getQuery($query);
		// $data['count']	= $this->db->getCount($query);
		// $event 			= "SELECT * FROM tbl_events WHERE user_id='".$_SESSION[ID]."' ";
 	// 	$data['event']	= $this->db->getQuery($event);
		$this->view('admins/header',$data);
		$this->view('admins/announcements',$data);
		$this->view('admins/footer');
	} 

	public function login(){
	
		if_login($this->url[0]);
		$data['title'] = 'LOGIN';
		if(isset($_POST['submit'])){
			$table = table($this->url[0]);
			$query = "SELECT email,password,id,name,type,email,active FROM tbl_admins WHERE  email ='". $_POST['email']."' AND password ='".md5($_POST['password'])."' ";
 			$data['user']	= $this->db->getFetch($query);
			$data['count']	= $this->db->getCount($query);
			if($data['count'] > 0){
	 			if($data['user']['active']==1){
					$_SESSION[ID]    =  ($data['user']['id']);
					$_SESSION[NAME]  =  ucwords($data['user']['name']);
					$_SESSION[TYPE]  =  strtoupper($data['user']['type']);
					$_SESSION[EMAIL] =  strtolower($data['user']['email']);
					redirect('admins/index');
				}else{
			 		$error[] =  "Your account is not yet active";
					$data['error'] = $error;
		 		}
			}else{
				$error[] =  "Invalid email or password.";
				$data['error'] = $error;
			}
		}
		$this->view('admins/main/header');
		$this->view('admins/login',$data);
		$this->view('admins/main/footer');
	}

 	public function logout(){
		logout();
	}

	public function register(){
	
		$data['title'] = 'Sign Up';
			if (isset($_POST['submit']) )  {
				$Data = array(
					'name' 			=> $_POST['name'],
					'email' 		=> $_POST['email'],
					'contact_number'=> $_POST['contact_number'],
					'address' 		=> $_POST['address'],
					'password' 		=> md5($_POST['password']),
					'type' 			=> "admins",
					'token'			=> md5($_POST['email'].uniqid(rand()))
				);
			$query 			= "SELECT * FROM tbl_admins WHERE email='".$Data['email']."'";
			$data['count']	= $this->db->getCount($query);
			if($data['count'] == 0){
				verify_email($Data['email'],$Data['name'],$Data['token'],$Data['type']);
				$add = $this->db->insert('tbl_admins' ,$Data);

				if($add){
					$success[] =  "Please check your email and click on the link provided to verify your account.";
					$data['success'] = $success;
				}else{
					$error[] =  "Something Wrong,Please Contact System Administrator";
					$data['error'] = $error;
				}
			}else{
				$error[] =  "Email is already exists";
				$data['error'] = $error;
			}	 
	  	}
	  	$data['country'] = country();
	  	$this->view('admins/main/header');
		$this->view('admins/register',$data);
		$this->view('admins/main/footer');
	}

	public function verify_email(){
		 
		isset($this->url[2]) ? '':redirect('/');
		$Data 		= array('active' => 1);
		$condition 	= array('token' => $this->url[2] );
		$edit = $this->db->update('tbl_admins',$Data,$condition);
		if($edit){
			$success[] =  "Verify successfully you can now login!";
			$data['success'] = $success;
				$this->view('admins/main/header');
				$this->view('admins/login',$data);
				$this->view('admins/main/footer');
		} 

	}

	public function update_profile(){
		$data['title'] = 'Update Profile';
		is_admin();
 		is_loggedin();
		$id = $_SESSION[ID];
		$admins 		 = "SELECT * FROM tbl_admins WHERE id='".$id."'";
 		$data['admin']	 = $this->db->getFetch($admins);
		$data['admins']  = $this->db->getCount($admins);
		$data['country'] = country();
		$data['admins']  == true? '':redirect('admins/index');
			
		if (isset($_POST['submit']) )  {
		// -------------------------------------------------------------
			if(empty($_POST['newpassword'])){
				$newpassword = $data['admin']['password'];				
			}else{
				$newpassword = md5($_POST['newpassword']);
			}
			$confirmpassword = md5($_POST['confirmpassword']);
			$check = $this->db->getCount("SELECT * FROM tbl_admins WHERE id ='". $id."' AND password ='".$confirmpassword."' ");

		if($check>0){
			$Data = array(
				'admin_id'       => $_POST['admin_id'],
				'name' 			 => $_POST['name'],
				'gender' 		 => $_POST['gender'],
				'date_of_birth'  => $_POST['date_of_birth'],
				'email' 		 => $_POST['email'],
				'password'		 => $newpassword,
				'contact_number' => $_POST['contact_number'],
				'department' 	 => $_POST['department']
			);
			$edit = $this->db->update('tbl_admins',$Data,array('id' => $id ));

			if($edit){
				$success[] =  "Save Succesfully!";
				$data['success'] = $success;
 				$admins 		 = "SELECT * FROM tbl_admins WHERE id='".$id."'";
 				$data['admin']	 = $this->db->getFetch($admins);
				$_SESSION[NAME] =  ucwords($data['admin']['name']);
				$_SESSION[EMAIL] =  strtolower($data['admin']['email']);
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

		$this->view('admins/header',$data);
		$this->view('admins/update_profile',$data);
		$this->view('admins/footer');
	}

	public function forgot_password(){
		 	 
		 
		$data['title'] = 'Forgot Password';
		if(isset($_POST['submit'])){
			$table 			= table($this->url[0]);
			$query 			= "SELECT id,email,name,type FROM tbl_admins WHERE  email ='". $_POST['email']."' ";
 			$data['user']	= $this->db->getFetch($query);
			$data['count']	= $this->db->getCount($query);
			reset_password($data['user']);
			if($data['count'] > 0){
				$success[] 		=  "Please check your email and click on the link provided to reset your password.";
				$data['success']= $success;
				$Data 			= array('date_forgot_password' => date("Y-m-d H:i:s"));
				$condition 		= array('id' =>$data['user']['id'] );
				$edit 			= $this->db->update('tbl_admins',$Data,$condition);
			}else{
				$error[] =  "Invalid email";
				$data['error'] = $error;
			}
		}
		$this->view('admins/main/header');
		$this->view('admins/forgot_password',$data);
		$this->view('admins/main/footer');
		 
	}

	public function reset_password(){
		
		$data['title'] = 'Reset Password';
		$id = d($this->url[1]);
		$admins 		= "SELECT * FROM tbl_admins WHERE id='".$id."' ";
 		$data['admins']= $this->db->getCount($admins);
		$data['alumni']	= $this->db->getFetch($admins);

		if($data['alumni']['date_forgot_password']=='0000-00-00 00:00:00'){
			redirect('admins/login');
		}


		if(isset($_POST['submit'])){
			if($_POST['new_password']==$_POST['confirm_password']){
				$edit = $this->db->update('tbl_admins',array('password' => md5($_POST['new_password']),'date_forgot_password' => '0000-00-00 00:00:00' ),array('id'=>$id));
				if($edit){
					$success[] =  "Save Succesfully!";
					$data['success'] = $success;
				}
			}else{
					$error[] =  "New and Current Password did not match";
					$data['error'] = $error;
			}	
		}
		$this->view('admins/main/header');
		$this->view('admins/reset_password',$data);
		$this->view('admins/main/footer');
	}

	


}