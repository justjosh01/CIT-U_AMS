<?php
class Super_admin extends Controller
{
	public function __construct(){
		$this->db 	= $this->model('db');
		$this->url 	= $this->url();

	}

	public function index(){
		$data['title'] = 'User Accounts';
		is_super_admin();
		is_loggedin();
		$alumni 			= "SELECT * FROM tbl_alumni";
 		$data['alumnus']		= $this->db->getQuery($alumni);
		$data['alumni']	= $this->db->getCount($alumni);
		$admins 			= "SELECT * FROM tbl_admins";
 		$data['admins']		= $this->db->getCount($admins);

		$this->view('super_admin/header',$data);
		$this->view('super_admin/index',$data);
		$this->view('super_admin/footer');
	}
	public function alumni(){
		$data['title'] = 'Alumni';
		is_super_admin();
		is_loggedin();
		$query 			= "SELECT * FROM tbl_alumni";
 		$data['alumnus']	= $this->db->getQuery($query);
		$data['alumni']	= $this->db->getCount($query);
		$this->view('super_admin/header',$data);
		$this->view('super_admin/alumni',$data);
		$this->view('super_admin/footer');
	}
	public function add_alumni(){
		$data['title'] = 'Add Alumni';
		is_super_admin();
		is_loggedin();
		$data['gender']           = gender();
		$data['year_graduated']   = year();
		$data['alumni']	 	      = array();
		

		if (isset($_POST['submit']) )  {
			$Data = array(
				'alumni_id' 	    => $_POST['alumni_id'],
				'name' 				=> $_POST['name'],
				'email' 			=> $_POST['email'],
				'password' 			=> md5("CITU".$_POST['alumni_id']),
				'contact_number' 	=> $_POST['contact_number'],
				'date_of_birth' 	=> $_POST['date_of_birth'],
				'gender' 			=> $_POST['gender'],
				'year_graduated' 	=> $_POST['year_graduated'],
				'tertiary'        => "Cebu Institute of Technology - University",
				'type' 		=> "alumni",
				'active' 	=> 0,
				'token'		=> md5($_POST['email'].uniqid(rand()))
			);

			$data['alumni']	 = $this->db->getCount("SELECT * FROM tbl_alumni WHERE email='".$Data['email']."'");
 
			if($data['alumni'] == 0){
				// verify_email($Data['email'],$Data['name'],$Data['token'],$Data['type']);
				$add = $this->db->insert('tbl_alumni' ,$Data);
				$lastID = $this->db->conn->lastInsertId();

					if($lastID == 0){
						$lastID = 1;
					}

				// foreach ($_POST['career_field'] as $career_field) {
				// 	$Data = array(
				// 		'alumni'=> $lastID,
				// 		'career_field_id'=> $career_field
				// 	);
				// 	$add_career_field = $this->db->insert('tbl_salary_range' ,$Data);
				// 	// $edit = $this->db->update('tbl_image',$Data,array('id' => $image['id'] ));
				// }

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
		$this->view('super_admin/header',$data);
		$this->view('super_admin/alumni/form',$data);
		$this->view('super_admin/footer');
	}

	 public function import_alumni(){
    	$data['title'] = 'Import Alumni';
        is_super_admin();
        is_loggedin();
    	
		if(isset($_POST['import'])){
			if($_FILES['file']['error']==0){
				$name = basename($_FILES['file']['name']);
				$size = $_FILES['file']['size'];
				$type = $_FILES['file']['type'];
				$ext = substr($name,strrpos($name,".")+1);
				if(($size/1024/1024)<1){
					if($type=="application/vnd.ms-excel"){
						if ( isset( $_FILES['file'] ) ){
						$csv_file = $_FILES['file']['tmp_name'];
							if ( ! is_file( $csv_file ) )
							exit('File not found.');
							$sql = '';
							if (($handle = fopen( $csv_file, "r")) !== FALSE){
							 	  $headers = fgetcsv($handle, 1000, ",");
								while (($datax = fgetcsv($handle, 1000, ",")) !== FALSE){
		 
 
						 		$sql = "SELECT * FROM tbl_alumni WHERE  name=:name ";
						        $query = $this->db->conn->prepare($sql);
						        $query->bindValue(':name', ($datax[0]), PDO::PARAM_STR);
						        $query->execute();
						        $variable = $query->rowCount();
						        $alumni = $query->fetch();


							  if( $variable == 0    ){
								$field = array(
									'active'=>0,
									'type'=>'alumni',

									'alumni_id' => ($datax[0]),
									'name'=>($datax[1]),
									'email'=>($datax[2]),
									'contact_number'=>($datax[3]),
									'gender'=>($datax[4]),
									'date_of_birth'=>($datax[5]),
									'year_graduated'=>($datax[6]),

									'tertiary'        => "Cebu Institute of Technology - University",
									'password' =>md5("CITU".($datax[0])),
									'token'    => md5(($datax[2])),
									
									);
												 
	 
													// echo $datax[0].'<br>';
							$add = $this->db->insert('tbl_alumni',$field);
							$lastID = $this->db->conn->lastInsertId();

							if($lastID == 0){
								$lastID = 1;
							}

  
							if(isset($datax[2])):

								$pieces = explode(',', $datax[2]);
							// foreach($pieces as $element)
							// {
							//  	$sql = "SELECT * FROM tbl_materials WHERE  name=:name ";
						 //        $query = $this->db->conn->prepare($sql);
						 //        $query->bindValue(':name', ($element), PDO::PARAM_STR);
						 //        $query->execute();
						 //        $variable = $query->rowCount();
						 //        $materials = $query->fetch();


							// 	if($variable > 0){
							// 			$Data = array(
							// 			'member_id'=> $lastID,
							// 			'material_id'=> $materials['id']
							// 			);
							// 		$add_material = $this->db->insert('tbl_members_material' ,$Data);
							// 	}else{
									
							// 	}

							// }
							endif;
							$errors[] = ("yyy");
							$data['errors'] = $errors;


 
						}else{
							$field = array(
								'active'=>1,
								'type'=>'alumni',
								'alumni_id' => ($datax[0]),
								'name'=>($datax[1]),
								'email'=>($datax[2]),
								'contact_number'=>($datax[3]),
								'gender'=>($datax[4]),
								'date_of_birth'=>($datax[5]),
								'year_graduated'=>($datax[6]),
								'tertiary'       => "Cebu Institute of Technology - University",
								'password' =>md5("CITU".($datax[0])),
								'token'    => md5(($datax[2]))

								);

 
							$edit = $this->db->update('tbl_alumni',$field,array('id' => $alumni['id'] ));
							// $delete =  $this->db->delete('tbl_members_material' ,array('member_id' => $alumni['id']));

							// ------------------------------------------
							if(isset($datax[2])):
							$pieces = explode(',', $datax[2]);
							// foreach($pieces as $element)
							// {

							// 	$sql = "SELECT * FROM tbl_materials WHERE  name=:name ";
							// 	$query = $this->db->conn->prepare($sql);
							// 	$query->bindValue(':name', ($element), PDO::PARAM_STR);
							// 	$query->execute();
							// 	$variable = $query->rowCount();
							// 	$materials = $query->fetch();


							// 	if($variable > 0){
							// 		$Data = array(
							// 		'member_id'=> $alumni['id'],
							// 		'material_id'=> $materials['id']
							// 		);
							// 		$add_material = $this->db->insert('tbl_members_material' ,$Data);
								 
							// 	}else{
								 
							// 	}


							// }
							endif;
							// ------------------------------------------
							}

							// ==============================
								}
								// redirect('administrator/import');
								fclose($handle);
							}
						}
					}else{
						$errors[] = ("Invalid file");
						$data['errors'] = $errors;
					}
				}else{
					$errors[] = ("You reached file limit 1 mb");
					$data['errors'] = $errors;
				}
			}else{
				$errors[] = ("File upload error");
				$data['errors'] = $errors;
			}
		}

    	$this->view('super_admin/header',$data);
		$this->view('super_admin/import_alumni',$data);
		$this->view('super_admin/footer');
    }

	public function update_alumni(){
		$data['title'] = 'Update Alumni';
		is_super_admin();
		is_loggedin();
		isset($this->url[2]) ? '':redirect('alumni/lists');
		$id = d($this->url[2]);
 		$alumni 		 	= "SELECT * FROM tbl_alumni WHERE id='".$id."'";
 		$data['alumnus']	 	= $this->db->getFetch($alumni);
		$data['alumni'] 	= $this->db->getCount($alumni);
		$data['gender']     = gender();
		$data['year_graduated']     = year();
		$data['alumni'] 	== true? '':redirect('super_admin/alumni');
		$newimage = '';

 		if(isset($_POST['submit'])){

		$password = empty($_POST['password']) ?  $data['alumni']['password'] : md5($_POST['password']);

			$Data = array(
				'alumni_id' 		=> $_POST['alumni_id'],
				'name' 				=> $_POST['name'],
				'email' 			=> $_POST['email'],
				'contact_number' 	=> $_POST['contact_number'],
				'date_of_birth'     => $_POST['date_of_birth'],
				'gender' 	        => $_POST['gender'],
				'year_graduated'    => $_POST['year_graduated']
				);


			$edit = $this->db->update('tbl_alumni' ,$Data, array('id' =>$id));


			if($edit){
				$success[] =  "Save Succesfully!";
				$data['success'] = $success;

				$alumni 		 	= "SELECT * FROM tbl_alumni WHERE alumni_id='".$Data['alumni_id']."'";
                $data['alumnus']	= $this->db->getFetch($alumni);

			}else{
				$error[] =  "Something Wrong,Please Contact System Administrator";
				$data['error'] = $error;
			}
		} 
		$this->view('super_admin/header',$data);
		$this->view('super_admin/alumni/form',$data);
		$this->view('super_admin/footer');
	}
	public function delete_alumni(){


		is_super_admin();
		is_loggedin();
		isset($this->url[2]) ? '':redirect('alumni/lists');
		$id = d($this->url[2]);
 		$alumni 		 	= "SELECT * FROM tbl_alumni WHERE id='".$id."'";
 		$data['alumni']	 	= $this->db->getFetch($alumni);
		$data['alumni'] 	= $this->db->getCount($alumni);
		$data['alumni'] 	== true? '':redirect('super_admin/alumni');
		
		$delete = $this->db->delete('tbl_alumni' , array('id' =>$id));
			if($delete){
				$success[] =  "Save Succesfully!";
				$data['success'] = $success;

				redirect('super_admin/alumni');

			}else{
				$error[] =  "Something Wrong,Please Contact System Administrator";
				$data['error'] = $error;
			}
		
		$this->view('super_admin/header',$data);
		$this->view('super_admin/alumni',$data);
		$this->view('super_admin/footer');
	}

	public function admins(){
		$data['title'] = 'Admins';
		is_super_admin();
		is_loggedin();
		$query 			= "SELECT * FROM tbl_admins";
 		$data['admin']	= $this->db->getQuery($query);
		$data['admins']	= $this->db->getCount($query);
		$this->view('super_admin/header',$data);
		$this->view('super_admin/admins',$data);
		$this->view('super_admin/footer');
	}	
	public function add_admin(){
		$data['title'] = 'Add Admin';
		is_super_admin();
		is_loggedin();
		$data['gender']     = gender();
		$data['department'] = department();
		$data['country']   = country();
		$data['admin']	 	= array();
		if (isset($_POST['submit']) )  {
			$Data = array(
				'admin_id'       => $_POST['admin_id'],
				'name' 			 => $_POST['name'],
				'gender' 		 => $_POST['gender'],
				'date_of_birth'  => $_POST['date_of_birth'],
				'email' 		 => $_POST['email'],
				'contact_number' => $_POST['contact_number'],
				'department' 	 => $_POST['department'],
				'location' 		 => $_POST['country'],
				'password' 		 => md5($_POST['admin_id']),
				'type' 		=> "admins",
				'active' 	=> 1,
				'token'		=> md5($_POST['email'].uniqid(rand()))
			);

			$data['admins']	 = $this->db->getCount("SELECT * FROM tbl_admins WHERE email='".$Data['email']."'");
 
			if($data['admins'] == 0){
				// verify_email($Data['email'],$Data['name'],$Data['token'],$Data['type']);
				$add = $this->db->insert('tbl_admins' ,$Data);
				$lastID = $this->db->conn->lastInsertId();

					if($lastID == 0){
						$lastID = 1;
					}


				if($add){
					$success[] =  "Save Succesfully!";
					$data['success'] = $success;

					$admins		 	= "SELECT * FROM tbl_admins WHERE admin_id='".$Data['admin_id']."'";
                    $data['admin']	= $this->db->getFetch($admins);
				}else{
					$error[] =  "Something Wrong,Please Contact System Administrator";
					$data['error'] = $error;
				}
			}else{
				$error[] =  "Email is already exists";
				$data['error'] = $error;
			}
		}
		$this->view('super_admin/header',$data);
		$this->view('super_admin/admins/form',$data);
		$this->view('super_admin/footer');
	}
	public function update_admin(){
		$data['title'] = 'Update Admin';
		is_super_admin();
		is_loggedin();
		isset($this->url[2]) ? '':redirect('admins/lists');
		$id = d($this->url[2]);
 		$admins 		 	= "SELECT * FROM tbl_admins WHERE id='".$id."'";
 		$data['admin']	 	= $this->db->getFetch($admins);
		$data['admins'] 	= $this->db->getCount($admins);
		$data['admins'] 	== true? '':redirect('super_admin/admins');
		$data['gender']     = gender();
		$data['department'] = department();
		$data['country']   = country();
		$newimage = '';

 		if(isset($_POST['submit'])){

		$password = empty($_POST['password']) ?  $data['admin']['password'] : md5($_POST['password']);

			$Data = array(
				'admin_id'       => $_POST['admin_id'],
				'name' 			 => $_POST['name'],
				'gender' 		 => $_POST['gender'],
				'date_of_birth'  => $_POST['date_of_birth'],
				'email' 		 => $_POST['email'],
				'contact_number' => $_POST['contact_number'],
				'department' 	 => $_POST['department'],
				'location' 		 => $_POST['country'],
				'password' 		 => $password,
				);


			$edit = $this->db->update('tbl_admins' ,$Data, array('id' =>$id));


			if($edit){
				$success[] =  "Save Succesfully!";
				$data['success'] = $success;

				$data['admin']	 = $this->db->getFetch($admins);

			}else{
				$error[] =  "Something Wrong,Please Contact System Administrator";
				$data['error'] = $error;
			}
		} 
		$this->view('super_admin/header',$data);
		$this->view('super_admin/admins/form',$data);
		$this->view('super_admin/footer');
	}
	public function delete_admin(){


		is_super_admin();
		is_loggedin();
		isset($this->url[2]) ? '':redirect('admins/lists');
		$id = d($this->url[2]);
 		$admins 		 	= "SELECT * FROM tbl_admins WHERE id='".$id."'";
 		$data['admin']	 	= $this->db->getFetch($admins);
		$data['admins'] 	= $this->db->getCount($admins);
		$data['admins'] 	== true? '':redirect('super_admin/admins');
		
		$delete = $this->db->delete('tbl_admins' , array('id' =>$id));
			if($delete){
				$success[] =  "Save Succesfully!";
				$data['success'] = $success;

				redirect('super_admin/admins');

			}else{
				$error[] =  "Something Wrong,Please Contact System Administrator";
				$data['error'] = $error;
			}
		
		$this->view('super_admin/header',$data);
		$this->view('super_admin/admins',$data);
		$this->view('super_admin/footer');
	}

	public function announcements(){

		is_super_admin();
		is_loggedin();
		$query 			= "SELECT * FROM tbl_annoucements";
 		$data['list']	= $this->db->getQuery($query);
		$data['count']	= $this->db->getCount($query);
		$this->view('super_admin/header',$data);
		$this->view('super_admin/annoucements',$data);
		$this->view('super_admin/footer');
	}	
	public function career_field(){

		is_super_admin();
		is_loggedin();
		$query 			= "SELECT * FROM tbl_career_field";
 		$data['list']	= $this->db->getQuery($query);
		$data['count']	= $this->db->getCount($query);
		$this->view('super_admin/header',$data);
		$this->view('super_admin/career_field',$data);
		$this->view('super_admin/footer');
	}
	public function add_career_field(){

		is_super_admin();
		is_loggedin();
		$data['alumni']	 = array();
		if (isset($_POST['submit']) )  {
			$Data = array('name' => $_POST['name']);
			$data['career_field']	 = $this->db->getCount("SELECT * FROM tbl_career_field WHERE name='".$Data['name']."'");
			if($data['career_field'] == 0){
				$add = $this->db->insert('tbl_career_field' ,$Data);
				if($add){
					$success[] =  "Save Succesfully!";
					$data['success'] = $success;
				}else{
					$error[] =  "Something Wrong,Please Contact System Administrator";
					$data['error'] = $error;
				}
			}else{
				$error[] =  "Material name is already exists";
				$data['error'] = $error;
			}
		}
		$this->view('super_admin/header',$data);
		$this->view('super_admin/career_field/form',$data);
		$this->view('super_admin/footer');
	}
	


	public function update_career_field(){


		is_super_admin();
		is_loggedin();
		isset($this->url[2]) ? '':redirect('super_admin/career_field');
		$id = d($this->url[2]);
 		$career_field 		 	= "SELECT * FROM tbl_career_field WHERE id='".$id."'";
 		$data['career_field']	= $this->db->getFetch($career_field);
		$data['career_field'] 	= $this->db->getCount($career_field);
		$data['career_field'] == true? '':redirect('super_admin/career_field');
		$newimage = '';

		if(isset($_POST['submit'])){
			$Data = array('name' => $_POST['name']);
			$edit = $this->db->update('tbl_career_field' ,$Data, array('id' =>$id));
			if($edit){
				$success[] =  "Save Succesfully!";
				$data['success'] 	= $success;
				$data['career_field']	= $this->db->getFetch($career_field);
			}else{
				$error[] 		=  "Something Wrong,Please Contact System Administrator";
				$data['error'] 	= $error;
			}
		}
		$this->view('super_admin/header',$data);
		$this->view('super_admin/career_field/form',$data);
		$this->view('super_admin/footer');
	}
	


	public function delete_career_field(){

		is_super_admin();
		is_loggedin();
		isset($this->url[2]) ? '':redirect('super_admin/career_field');
		$id = d($this->url[2]);
 		$career_field 		 	= "SELECT * FROM tbl_career_field WHERE id='".$id."'";
 		$data['career_field']	= $this->db->getFetch($career_field);
		$data['career_field'] 	= $this->db->getCount($career_field);
		$data['career_field'] 	== true? '':redirect('super_admin/career_field'); 
		$delete =  $this->db->delete('tbl_career_field' ,array('id' 	=> $id));
			if($delete){
				redirect('super_admin/career_field');		 
			}else{
				 
			}
	}

	

	public function update_profile(){
		$data['title'] = 'Update Profile';
		is_super_admin();
		is_loggedin();
		$id = $_SESSION[ID];

		$super_admin 		  = "SELECT * FROM tbl_super_admin WHERE id='".$id."'";
 		$data['super_admins'] = $this->db->getFetch($super_admin);
		$data['super_admin']  = $this->db->getCount($super_admin);

		$data['country'] = country();

		$data['super_admin'] == true? '':redirect('super_admin/index');
			
		if (isset($_POST['submit']) )  {
			

		// ----------------------------------------------
			if(empty($_POST['newpassword'])){
				$newpassword = $data['super_admin']['password'];				
			}else{
				$newpassword = md5($_POST['newpassword']);
			}
			$confirmpassword = md5($_POST['confirmpassword']);
			$check = $this->db->getCount("SELECT * FROM tbl_super_admin WHERE id ='". $id."' AND password ='".$confirmpassword."' ");


		if($check>0){
		
				$Data = array(
					// 'name' 			=> $_POST['name'],
					// 'email' 		=> $_POST['email'],
					'password'		=> $newpassword,
				);
			$edit = $this->db->update('tbl_super_admin',$Data,array('id' => $id ));

			if($edit){
				$success[] 				=  "Save Succesfully!";
				$data['success'] 		= $success;
 				$super_admin 		 	= "SELECT * FROM tbl_super_admin WHERE id='".$id."'";
 				$data['super_admin']	= $this->db->getFetch($super_admin);
				$_SESSION[NAME] 		= ucwords($data['super_admin']['name']);
				$_SESSION[EMAIL] 		= strtolower($data['super_admin']['email']);
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
		$this->view('super_admin/header',$data);
		$this->view('super_admin/update_profile',$data);
		$this->view('super_admin/footer');
	}	
	public function import(){
		is_super_admin();
		is_loggedin();
		$data['title'] = "IMPORT ";
		if(isset($_POST['import'])){
			if($_FILES['file']['error']==0){
				$name = basename($_FILES['file']['name']);
				$size = $_FILES['file']['size'];
				$type = $_FILES['file']['type'];
				$ext = substr($name,strrpos($name,".")+1);
				if(($size/1024/1024)<1){
					if($type=="application/vnd.ms-excel"){
						if ( isset( $_FILES['file'] ) ){
						$csv_file = $_FILES['file']['tmp_name'];
							if ( ! is_file( $csv_file ) )
							exit('File not found.');
							$sql = '';
							if (($handle = fopen( $csv_file, "r")) !== FALSE){
							 	  $headers = fgetcsv($handle, 1000, ",");
								while (($datax = fgetcsv($handle, 1000, ",")) !== FALSE){
		 
 
						 		$sql = "SELECT * FROM tbl_alumni WHERE  name=:name ";
						        $query = $this->db->conn->prepare($sql);
						        $query->bindValue(':name', ($datax[0]), PDO::PARAM_STR);
						        $query->execute();
						        $variable = $query->rowCount();
						        $alumni = $query->fetch();


							  if( $variable == 0    ){
								$field = array(
									'active'=>1,
									'type'=>'alumni',
									'password'=>'21232f297a57a5a743894a0e4a801fc3',
									
									'name'=>($datax[0]),
									'address'=>($datax[1]),
									
									'contact_number'=>($datax[3]),
									'email'=>($datax[4])
 


									);
												 
	 
													// echo $datax[0].'<br>';
							$add = $this->db->insert('tbl_alumni',$field);
							$lastID = $this->db->conn->lastInsertId();

							if($lastID == 0){
								$lastID = 1;
							}

  
							if(isset($datax[5])):

								$pieces = explode(',', $datax[5]);
							foreach($pieces as $element)
							{
							 	$sql = "SELECT * FROM tbl_career_field WHERE  name=:name ";
						        $query = $this->db->conn->prepare($sql);
						        $query->bindValue(':name', ($element), PDO::PARAM_STR);
						        $query->execute();
						        $variable = $query->rowCount();
						        $career_field = $query->fetch();


								if($variable > 0){
										$Data = array(
										'alumni'=> $lastID,
										'career_field_id'=> $career_field['id']
										);
									$add_career_field = $this->db->insert('tbl_salary_range' ,$Data);
								}else{
									
								}

							}
							endif;
							$errors[] = ("yyy");
							$data['errors'] = $errors;


 
						}else{
							$field = array(
								'active'=>1,
								'type'=>'alumni',
								'password'=>'21232f297a57a5a743894a0e4a801fc3',
								

								'name'=>($datax[0]),
								'address'=>($datax[1]),
								
								'contact_number'=>($datax[3]),
								'email'=>($datax[4])
								 
								);

 
							$edit = $this->db->update('tbl_alumni',$field,array('id' => $alumni['id'] ));
							$delete =  $this->db->delete('tbl_salary_range' ,array('alumni' => $alumni['id']));

							// ------------------------------------------
							if(isset($datax[5])):
							$pieces = explode(',', $datax[5]);
							foreach($pieces as $element)
							{

								$sql = "SELECT * FROM tbl_career_field WHERE  name=:name ";
								$query = $this->db->conn->prepare($sql);
								$query->bindValue(':name', ($element), PDO::PARAM_STR);
								$query->execute();
								$variable = $query->rowCount();
								$career_field = $query->fetch();


								if($variable > 0){
									$Data = array(
									'alumni'=> $alumni['id'],
									'career_field_id'=> $career_field['id']
									);
									$add_career_field = $this->db->insert('tbl_salary_range' ,$Data);
								 
								}else{
								 
								}


							}
							endif;
							// ------------------------------------------
							}

							// ==============================
								}
								// redirect('super_admin/import');
								fclose($handle);
							}
						}
					}else{
						$errors[] = ("Invalid file");
						$data['errors'] = $errors;
					}
				}else{
					$errors[] = ("You reached file limit 1 mb");
					$data['errors'] = $errors;
				}
			}else{
				$errors[] = ("File upload error");
				$data['errors'] = $errors;
			}
		}



		$this->view('super_admin/header',$data);
		$this->view('super_admin/import_alumni',$data);
		$this->view('super_admin/footer',$data);
	}
	public function login(){

		if_login($this->url[0]);

		$data['title'] = 'LOGIN';

		if(isset($_POST['submit'])){

			$table = table($this->url[0]);
			$query = "SELECT email,password,id,name,type,email FROM tbl_super_admin WHERE  email ='". $_POST['email']."' AND password ='".md5($_POST['password'])."' ";

 			$data['user']	= $this->db->getFetch($query);
			$data['count']	= $this->db->getCount($query);

			if($data['count'] > 0){
					$_SESSION[ID]    =  ($data['user']['id']);
					$_SESSION[NAME]  =  ucwords($data['user']['name']);
					$_SESSION[TYPE]  =  strtoupper($data['user']['type']);
					$_SESSION[EMAIL] =  strtolower($data['user']['email']);
					redirect('super_admin/index');
			}else{
				$error[] =  "Invalid email or password.";
				$data['error'] = $error;
			}
		}
		$this->view('super_admin/main/header');
		$this->view('super_admin/login',$data);
		$this->view('super_admin/main/footer');	
	}
	public function logout(){
		logout();
	}
	public function forgot_password(){
		 	 
		$data['title'] = 'Forgot Password';
		$this->view('super_admin/main/header');
		$this->view('super_admin/forgot_password',$data);
		$this->view('super_admin/main/footer');	 
	}
}
