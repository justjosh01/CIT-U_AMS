<?php

function degree($data){
	switch ($data) {
	  case '1':
	    $degree = 'Bachelor of Science in Information Technology';
	    break;
	  case '2':
	    $degree = 'Bachelor of Science in Computer Science';
	    break;
	  case '3':
	    $degree = 'Bachelor of Science in Computer Engineering';
	    break;
	  case '4':
	    $degree = 'Bachelor of Science in Mechanical Engineering';
	    break;
	  case '5':
	    $degree = 'Bachelor of Science in Civil Engineering';
	    break;
	  
	  default:
	    $degree = '';
	    break;
	}


	return $degree;

}

function salary_range($data){
	switch ($data) {
	  case '1':
	    $salary_range = '5,000 - 20,000';
	    break;
	  case '2':
	    $salary_range = '21,000 - 35,000';
	    break;
	  case '3':
	    $salary_range = '36,000 - 50,000';
	    break;
	  case '4':
	    $salary_range = '51,000 - 65,000';
	    break;
	  case '5':
	    $salary_range = '66,000 - 80,000';
	    break;
	  case '6':
	    $salary_range = '81,000 - 95,000';
	    break;
	  
	  default:
	    $salary_range = '';
	    break;
	}


	return $salary_range;
}

function career_field($data){
	switch ($data) {
	  case '1':
	    $career_field = 'Agriculture, Food, & Natural Resources';
	    break;
	  case '2':
	    $career_field = 'Business, Management, & Administration';
	    break;
	  case '3':
	    $career_field = 'Communications & Information Systems';
	    break;
	  case '4':
	    $career_field = 'Engineering, Manufacturing, & Technology';
	    break;
	  case '5':
	    $career_field = 'Health Science Technology';
	    break;
	  case '6':
	    $career_field = 'Human Services';
	    break;
	  
	  default:
	    $career_field = '';
	    break;
	}


	return $career_field;
}

function work_status($data){
	switch ($data) {
	  case '1':
	    $work_status = 'Permanent';
	    break;
	  case '2':
	    $work_status = 'Temporary';
	    break;
	  case '3':
	    $work_status = 'Contractual';
	    break;
	  case '4':
	    $work_status = 'Self-employed';
	    break;

	  
	  default:
	    $work_status = '';
	    break;
	}


	return $work_status;
}

function sector($data){
	switch ($data) {
	  case '1':
	    $sector = 'Government';
	    break;
	  case '2':
	    $sector = 'Academe';
	    break;
	  case '3':
	    $sector = 'Private';
	    break;
	  case '4':
	    $sector = 'NGO/Foundation';
	    break;
	  case '5':
	    $sector = 'Self-employed';
	    break;
	  
	  default:
	    $sector = '';
	    break;
	}


	return $sector;
}

function civil_status($data){
	switch ($data) {
	  case '1':
	    $civil_status = 'Single';
	    break;
	  case '2':
	    $civil_status = 'Married';
	    break;
	  case '3':
	    $civil_status = 'Separated';
	    break;
	  case '4':
	    $civil_status = 'Widow';
	    break;
	  case '5':
	    $civil_status = 'Deceased';
	    break;
	  
	  default:
	    $civil_status = '';
	    break;
	}


	return $civil_status;

}

function is_job_aligned($data){
	switch ($data) {
	  case '1':
	    $is_job_aligned = 'Yes';
	    break;
	  case '2':
	    $is_job_aligned = 'No';
	    break;
	  
	  default:
	    $is_job_aligned = '';
	    break;
	}


	return $is_job_aligned;

}

function past_employment_status($data){
	switch ($data) {
	  case '1':
	    $past_employment_status = 'Employed, locally';
	    break;
	  case '2':
	    $past_employment_status = 'Employed, abroad';
	    break;
	  case '3':
	    $past_employment_status = 'Self-employed';
	    break;
	  
	  default:
	    $past_employment_status = '';
	    break;
	}


	return $past_employment_status;

}

function employment_status($data){
	switch ($data) {
	  case '1':
	    $employment_status = 'Employed';
	    break;
	  case '2':
	    $employment_status = 'Unemployed';
	    break;
	  
	  default:
	    $employment_status = '';
	    break;
	}


	return $employment_status;

}

function gender($data){
	switch ($data) {
	  case 'Male':
	    $gender = 'Male';
	    break;
	  case 'Female':
	    $gender = 'Female';
	    break;
	  case 'Others':
	    $gender = 'Others';
	    break;
	  
	  default:
	    $gender = '';
	    break;
	}


	return $gender;

}

function year($data){
	switch ($data) {
	  case '0':
	    $year = '2019';
	    break;
	  case '1':
	    $year = '2018';
	    break;
	  case '2':
	    $year = '2017';
	    break;
	  case '3':
	    $year = '2016';
	    break;
	  case '4':
	    $year = '2015';
	    break;
	  case '5':
	    $year = '2014';
	    break;
	  case '6':
	    $year = '2013';
	    break;
	  case '7':
	    $year = '2012';
	    break;
	  case '8':
	    $year = '2011';
	    break;
	  case '9':
	    $year = '2010';
	    break;
	  case '10':
	    $year = '2009';
	    break;
	   case '11':
	    $year = '2008';
	    break;
	  case '12':
	    $year = '2007';
	    break;
	  case '13':
	    $year = '2006';
	    break;
	  case '14':
	    $year = '2005';
	    break;
	  case '15':
	    $year = '2004';
	    break;
	  case '16':
	    $year = '2003';
	    break;
	  case '17':
	    $year = '2002';
	    break;
	  case '18':
	    $year = '2001';
	    break;
	  case '19':
	    $year = '2000';
	    break;

	  default:
	    $year = '';
	    break;

	}


	return $year;

}