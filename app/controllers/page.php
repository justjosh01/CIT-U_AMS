<?php
class Page extends Controller
{ 
	public function __construct(){
		$this->db 	= $this->model('db');
		$this->url 	= $this->url();		

	}

	public function index(){
	 
		 
		$this->view('page/landing_page');
		 

	}

	
	public function admins(){
		
		$data['title'] = 'database';
		$data['admins'] = $this->db->getRows("tbl_admins");
		$this->view('page/admins_lists',$data);
		 
	} 

	public function alumni(){
		
		$data['title'] = 'database';
		$data['alumni'] = $this->db->getRows("tbl_alumni"); 
		$this->view('page/alumni_lists',$data);
		 
	} 

	public function announcements(){
		
		$data['title'] = 'database';
		$data['announcements'] = $this->db->getRows("tbl_announcements"); 
		
		echo '<pre>';
		print_r($data['announcements']);
		echo '</pre>'; 
	} 
	public function events(){
		
		$data['title'] = 'database';
		$data['events'] = $this->db->getRows("tbl_events"); 
		
		echo '<pre>';
		print_r($data['events']);
		echo '</pre>'; 
	} 
	public function deleteall(){
		// $this->db->delete('tbl_admins');
		$this->db->delete('tbl_alumni');
		// $this->db->delete('tbl_events');
		// $this->db->delete('tbl_announcements');
		// $this->db->delete('tbl_image');
		// $this->db->delete('tbl_materials');

		$this->db->delete('tbl_salary_range');
		// unlink(URL_ROOT.UPLOADS.'/*');

		
		// unlink('uploads/*');
		redirect('page');
	}
	public function database()
	{
		

		$data['title'] = 'database';

		$database = $this->db->getQuery("SHOW TABLES FROM ".DB_NAME);

		 


		$data['admins'] = $this->db->getRows("tbl_admins");
		$data['alumni'] = $this->db->getRows("tbl_alumni");
		$data['transactions'] = $this->db->getQuery("SELECT * FROM tbl_announcements ORDER BY id DESC  LIMIT 1 ");
		$data['events'] = $this->db->getQuery("SELECT * FROM tbl_events ORDER BY id  DESC LIMIT 10 ");
	
		$this->view('admins/main/header');
		$this->view('page/database',$data);
		$this->view('admins/main/footer');
		 
	} 




	public function delete()
	{
		

 
		$this->view('page/delete');
	 
		 
	} 
 











 }