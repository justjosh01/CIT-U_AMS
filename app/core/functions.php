 <?php


function profile_picture($var){
	

	if(empty($var) || !file_exists(UPLOADS.$var)){


		return 'assets/images/images.png';

		 echo $var;
	

	}else{

		return UPLOADS.$var;
	}
}


function normal_time($time){
	$time = strtotime($time);  	
		$hour = date("H",$time);
			$AmPm = $hour > 11 ? "pm" : "am";
				if(date("H:i:s",$time)=="00:00:00"){
					$result = "<div align='center'></div>";
				}else{
					$result = date("h:i:s ",$time)." ".$AmPm;
				}
				return $result; 
}	
function normal_date($date){
	if( !empty($date) AND isset($date)){
		$date = strtotime($date);  
		$date = date("M d, Y",$date);
	}else{
		$date = "";
		
	}	
	return $date;
}	


function error_message($data){
	 echo "<div class='alert alert-error alert-dismissible'>";
	 echo "<i class='icon fa fa-ban'></i>";
	 echo '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
    foreach ( $data as $error )
	foreach ( $data as $error )
	echo "$error\n";
	echo "</div>";
}

function success_message($data){
	 echo "<div class='alert alert-success alert-dismissible' style='background-color:#DFF2BF !important;color:green !important; border: 0px !important;  '>";
	 echo '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
    foreach ( $data as $error )
    echo "$error\n";
    echo "</div>";
}

function e($sData){
	$id=(double)$sData*525325.24;
	return base64_encode($id);
}//encrypt

function d($sData){
	$url_id=base64_decode($sData);
	$id=(double)$url_id/525325.24;
	return $id;
}//decrypt





function redirect($url)
{
	header("Location: ".URL_ROOT."$url");
}

function is_loggedin()
{
	if(isset($_SESSION[ID]))
	{
		return true;
	}else{	
			logout(); 	
	}


}

 



function if_login($data)
{
	if(isset($_SESSION[ID]))
	{
		redirect($data);
	}else{	
		return true;
	}
}



function is_super_admin()
{
	if(isset($_SESSION[TYPE]) && $_SESSION[TYPE]=="SUPER_ADMIN")
	{
		return true;
	}else{	
			redirect(strtolower($_SESSION[TYPE])); 	
	}
}

function is_alumni()
{
	if(isset($_SESSION[TYPE]) && $_SESSION[TYPE]=="ALUMNI")
	{
		return true;
	}else{	
			redirect(strtolower($_SESSION[TYPE])); 	
	}
}
function is_admin()
{
	if(isset($_SESSION[TYPE]) && $_SESSION[TYPE]=="ADMINS")
	{
		return true;
	}else{	
			redirect(strtolower($_SESSION[TYPE])); 	
	}
}




function name()
{
	if(isset($_SESSION[NAME]))
	{
		return ucwords(strtolower($_SESSION[NAME]) );
	}else{
		return "Unknown";
	}
}
function email_address()
{
	if(isset($_SESSION[EMAIL]))
	{
		return ($_SESSION[EMAIL]);
	}else{
		return "EMAIL ADDRESS";
	}
}
function type()
{
	if(isset($_SESSION[TYPE]))
	{
		return ucwords($_SESSION[TYPE]);
	}else{
		return "";
	}
}
function logout()
{
	session_destroy();
	// setcookie(ID,"",time() -3600);
	// setcookie(NAME,"",time() -3600);
	if(isset($_SESSION[TYPE])){
		redirect(strtolower($_SESSION[TYPE]).'/login');
	}else{
		redirect();
	}
	
	unset($_SESSION);
	
}



function account_type($data){
	switch ($data) {
	  case 'alumni':
	    $var = 'ALUMNI';
	    break;
	  case 'admins':
	    $var = 'ADMIN';
	    break;
	  case 'super_admin':
	    $var = 'SUPER_ADMIN';
	    break;
	  
	  
	  
	  default:
	    $var = '';
	    break;
	}


	return $var;

}

function submitted(){
	
		echo '<span class="badge bg-blue">Submitted</span>';
	 
}
function selected(){
	
		echo '<span class="badge bg-yellow-active">Selected</span>';
	 
}





function age($date){
			$from = new DateTime($date);
			$to   = new DateTime('today');
			return $from->diff($to)->d."\n";
}


function table($data){
	switch (strtolower($data)) {
	  case 'alumni':
	    $var = 'tbl_alumni';
	    break;
	  case 'admins':
	    $var = 'tbl_admins';
	    break;
	  case 'super_admin':
	    $var = 'tbl_super_admin';
	    break;
	  
	  
	  
	  default:
	    $var = '';
	    break;
	}


	return $var;

}

function inc($var){
	

	if(file_exists(URL_ROOT.'views/'.$var . '.php'))
		{
			 return include($var);

		}else {
			 return '';
		}
}




function readmore($string, $word_limit = 5){
    $words = explode(" ",$string);
        
    return implode(" ",array_splice($words,0,$word_limit)).' ..';
}



 
/**
 * easy image resize function
 * @param  $file - file name to resize
 * @param  $string - The image data, as a string
 * @param  $width - new image width
 * @param  $height - new image height
 * @param  $proportional - keep image proportional, default is no
 * @param  $output - name of the new file (include path if needed)
 * @param  $delete_original - if true the original image will be deleted
 * @param  $use_linux_commands - if set to true will use "rm" to delete the image, if false will use PHP unlink
 * @param  $quality - enter 1-100 (100 is best quality) default is 100
 * @return boolean|resource
 */
  function smart_resize_image($file,
                              $string             = null,
                              $width              = 0, 
                              $height             = 0, 
                              $proportional       = false, 
                              $output             = 'file', 
                              $delete_original    = true, 
                              $use_linux_commands = false,
  							  $quality = 100
  		 ) {
      
    if ( $height <= 0 && $width <= 0 ) return false;
    if ( $file === null && $string === null ) return false;

    # Setting defaults and meta
    $info                         = $file !== null ? getimagesize($file) : getimagesizefromstring($string);
    $image                        = '';
    $final_width                  = 0;
    $final_height                 = 0;
    list($width_old, $height_old) = $info;
	$cropHeight = $cropWidth = 0;

    # Calculating proportionality
    if ($proportional) {
      if      ($width  == 0)  $factor = $height/$height_old;
      elseif  ($height == 0)  $factor = $width/$width_old;
      else                    $factor = min( $width / $width_old, $height / $height_old );

      $final_width  = round( $width_old * $factor );
      $final_height = round( $height_old * $factor );
    }
    else {
      $final_width = ( $width <= 0 ) ? $width_old : $width;
      $final_height = ( $height <= 0 ) ? $height_old : $height;
	  $widthX = $width_old / $width;
	  $heightX = $height_old / $height;
	  
	  $x = min($widthX, $heightX);
	  $cropWidth = ($width_old - $width * $x) / 2;
	  $cropHeight = ($height_old - $height * $x) / 2;
    }

    # Loading image to memory according to type
    switch ( $info[2] ) {
      case IMAGETYPE_JPEG:  $file !== null ? $image = imagecreatefromjpeg($file) : $image = imagecreatefromstring($string);  break;
      case IMAGETYPE_GIF:   $file !== null ? $image = imagecreatefromgif($file)  : $image = imagecreatefromstring($string);  break;
      case IMAGETYPE_PNG:   $file !== null ? $image = imagecreatefrompng($file)  : $image = imagecreatefromstring($string);  break;
      default: return false;
    }
    
    
    # This is the resizing/resampling/transparency-preserving magic
    $image_resized = imagecreatetruecolor( $final_width, $final_height );
    if ( ($info[2] == IMAGETYPE_GIF) || ($info[2] == IMAGETYPE_PNG) ) {
      $transparency = imagecolortransparent($image);
      $palletsize = imagecolorstotal($image);

      if ($transparency >= 0 && $transparency < $palletsize) {
        $transparent_color  = imagecolorsforindex($image, $transparency);
        $transparency       = imagecolorallocate($image_resized, $transparent_color['red'], $transparent_color['green'], $transparent_color['blue']);
        imagefill($image_resized, 0, 0, $transparency);
        imagecolortransparent($image_resized, $transparency);
      }
      elseif ($info[2] == IMAGETYPE_PNG) {
        imagealphablending($image_resized, false);
        $color = imagecolorallocatealpha($image_resized, 0, 0, 0, 127);
        imagefill($image_resized, 0, 0, $color);
        imagesavealpha($image_resized, true);
      }
    }
    imagecopyresampled($image_resized, $image, 0, 0, $cropWidth, $cropHeight, $final_width, $final_height, $width_old - 2 * $cropWidth, $height_old - 2 * $cropHeight);
	
	
    # Taking care of original, if needed
    if ( $delete_original ) {
      if ( $use_linux_commands ) exec('rm '.$file);
      else @unlink($file);
    }

    # Preparing a method of providing result
    switch ( strtolower($output) ) {
      case 'browser':
        $mime = image_type_to_mime_type($info[2]);
        header("Content-type: $mime");
        $output = NULL;
      break;
      case 'file':
        $output = $file;
      break;
      case 'return':
        return $image_resized;
      break;
      default:
      break;
    }
    
    # Writing image according to type to the output destination and image quality
    switch ( $info[2] ) {
      case IMAGETYPE_GIF:   imagegif($image_resized, $output);    break;
      case IMAGETYPE_JPEG:  imagejpeg($image_resized, $output, $quality);   break;
      case IMAGETYPE_PNG:
        $quality = 9 - (int)((0.9*$quality)/10.0);
        imagepng($image_resized, $output, $quality);
        break;
      default: return false;
    }

    return true;
  }



function year(){
	$yearList = array(
	    "2019" => "2019",
	    "2018" => "2018",
	    "2017" => "2017",
	    "2016" => "2016",
	    "2015" => "2015",
	    "2014" => "2014",
	    "2013" => "2013",
	    "2012" => "2012",
	    "2011" => "2011",
	    "2010" => "2010",
	    "2009" => "2009",
	    "2008" => "2008",
	    "2007" => "2007",
	    "2006" => "2006",
	    "2005" => "2005",
	    "2004" => "2004",
	    "2003" => "2003",
	    "2002" => "2002",
	    "2001" => "2001",
	    "2000" => "2000",
	    "1999" => "1999",
	    "1998" => "1998",
	    "1997" => "1997",
	    "1996" => "1996",
	    "1995" => "1995",
	    "1994" => "1994",
	    "1993" => "1993",
	    "1992" => "1992",
	    "1991" => "1991",
	    "1990" => "1990",
	    "1989" => "1989",
	    "1988" => "1988",
	    "1987" => "1987",
	    "1986" => "1986",
	    "1985" => "1985",
	    "1984" => "1984",
	    "1983" => "1983",
	    "1982" => "1982",
	    "1981" => "1981",
	    "1980" => "1980",
	    "1979" => "1979",
	    "1978" => "1978",
	    "1977" => "1977",
	    "1976" => "1976",
	    "1975" => "1975",
	    "1974" => "1974",
	    "1973" => "1973",
	    "1972" => "1972",
	    "1971" => "1971",
	    "1970" => "1970",
	    "1969" => "1969",
	    "1968" => "1968",
	    "1967" => "1967",
	    "1966" => "1966",
	    "1965" => "1965",
	    "1964" => "1964",
	    "1963" => "1963",
	    "1962" => "1962",
	    "1961" => "1961",
	    "1960" => "1960",
	    "1959" => "1959",
	    "1958" => "1958",
	    "1957" => "1957",
	    "1956" => "1956",
	    "1955" => "1955",
	    "1954" => "1954",
	    "1953" => "1953",
	    "1952" => "1952",
	    "1951" => "1951",
	    "1950" => "1950",
	    "1949" => "1949",
	    "1948" => "1948",
	    "1947" => "1947"
	);
	return $yearList;

}

function department(){
	$departmentList = array(
		"IT"  => "Information Technology",
		"CS"  => "Computer Science",
		"CpE" => "Computer Engineering",
		"ME"  => "Mechanical Engineering",
		"CE"  => "Civil Engineering",
	);
	return $departmentList;
}

function degree(){
	$degreeList = array(
	 	"BSIT"  => "Bachelor of Science in Information Technology",
	 	"BSCS"  => "Bachelor of Science in Computer Science",
	 	"BSCpE" => "Bachelor of Science in Computer Engineering",
	 	"BSME"  => "Bachelor of Science in Mechanical Engineering",
	 	"BSCE"  => "Bachelor of Science in Civil Engineering",
	);
	return $degreeList;

}

function salary_range(){
	$salary_rangeList = array(
		"5,000 - 20,000",
		"21,000 - 35,000",
		"36,000 - 50,000",
		"51,000 - 65,000",
		"66,000 - 80,000",
		"81,000 - 95,000",
	);
	return $salary_rangeList;
}

function career_field(){
	$career_fieldList = array(
		"Agriculture, Food, & Natural Resources",
		"Business, Management, & Administration",
		"Communications & Information Systems",
		"Engineering, Manufacturing, & Technology",
		"Health Science Technology",
		"Human Services"
	);
	return $career_fieldList;
}

function work_status(){
	$work_statusList = array(
		"Permanent"     => "Permanent",
		"Temporary"     => "Temporary",
		"Contractual"   => "Contractual",
		"Self-employed" => "Self-employed"
	);
	return $work_statusList;
}

function sector(){
	$sectorList = array(
		"Government"     => "Government",
		"Academe"        => "Academe",
		"Private"        => "Private",
		"NGO/Foundation" => "NGO/Foundation",
		"Self-employed"  => "Self-employed"
	);
	return $sectorList;
}

function civil_status(){
	$civil_statusList = array(
		"Single"    => "Single",
		"Married"   => "Married",
		"Separated" => "Separated",
		"Widow"     => "Widow",
		"Deceased"  => "Deceased"
	);
	return $civil_statusList;

}

function job_aligned(){
	$job_alignedList = array(
		"No" ,
		"Yes"
	);
	return $job_alignedList;

}

function past_employment_status(){
	$past_employment_statusList = array(
		"Employed, locally" => "Employed, locally" ,
		"Employed, abroad"  => "Employed, abroad",
		"Self-employed"     => "Self-employed"
	);
	return $past_employment_statusList;

}

function employment_status(){
	$employment_statusList = array(
		"Employed"   => "Employed",
		"Unemployed" => "Unemployed"
	);
	return $employment_statusList;

}


function gender(){
	$genderList = array(
	  "Male" => "Male",
	  "Female" => "Female",
	  "Others" => "Others"
	);
   return $genderList;
}

function country(){


		$countryList = array(
		"AF" => "Afghanistan",
		"AL" => "Albania",
		"DZ" => "Algeria",
		"AS" => "American Samoa",
		"AD" => "Andorra",
		"AO" => "Angola",
		"AI" => "Anguilla",
		"AQ" => "Antarctica",
		"AG" => "Antigua and Barbuda",
		"AR" => "Argentina",
		"AM" => "Armenia",
		"AW" => "Aruba",
		"AU" => "Australia",
		"AT" => "Austria",
		"AZ" => "Azerbaijan",
		"BS" => "Bahamas",
		"BH" => "Bahrain",
		"BD" => "Bangladesh",
		"BB" => "Barbados",
		"BY" => "Belarus",
		"BE" => "Belgium",
		"BZ" => "Belize",
		"BJ" => "Benin",
		"BM" => "Bermuda",
		"BT" => "Bhutan",
		"BO" => "Bolivia",
		"BA" => "Bosnia and Herzegovina",
		"BW" => "Botswana",
		"BV" => "Bouvet Island",
		"BR" => "Brazil",
		"BQ" => "British Antarctic Territory",
		"IO" => "British Indian Ocean Territory",
		"VG" => "British Virgin Islands",
		"BN" => "Brunei",
		"BG" => "Bulgaria",
		"BF" => "Burkina Faso",
		"BI" => "Burundi",
		"KH" => "Cambodia",
		"CM" => "Cameroon",
		"CA" => "Canada",
		"CT" => "Canton and Enderbury Islands",
		"CV" => "Cape Verde",
		"KY" => "Cayman Islands",
		"CF" => "Central African Republic",
		"TD" => "Chad",
		"CL" => "Chile",
		"CN" => "China",
		"CX" => "Christmas Island",
		"CC" => "Cocos [Keeling] Islands",
		"CO" => "Colombia",
		"KM" => "Comoros",
		"CG" => "Congo - Brazzaville",
		"CD" => "Congo - Kinshasa",
		"CK" => "Cook Islands",
		"CR" => "Costa Rica",
		"HR" => "Croatia",
		"CU" => "Cuba",
		"CY" => "Cyprus",
		"CZ" => "Czech Republic",
		"CI" => "Côte d’Ivoire",
		"DK" => "Denmark",
		"DJ" => "Djibouti",
		"DM" => "Dominica",
		"DO" => "Dominican Republic",
		"NQ" => "Dronning Maud Land",
		"DD" => "East Germany",
		"EC" => "Ecuador",
		"EG" => "Egypt",
		"SV" => "El Salvador",
		"GQ" => "Equatorial Guinea",
		"ER" => "Eritrea",
		"EE" => "Estonia",
		"ET" => "Ethiopia",
		"FK" => "Falkland Islands",
		"FO" => "Faroe Islands",
		"FJ" => "Fiji",
		"FI" => "Finland",
		"FR" => "France",
		"GF" => "French Guiana",
		"PF" => "French Polynesia",
		"TF" => "French Southern Territories",
		"FQ" => "French Southern and Antarctic Territories",
		"GA" => "Gabon",
		"GM" => "Gambia",
		"GE" => "Georgia",
		"DE" => "Germany",
		"GH" => "Ghana",
		"GI" => "Gibraltar",
		"GR" => "Greece",
		"GL" => "Greenland",
		"GD" => "Grenada",
		"GP" => "Guadeloupe",
		"GU" => "Guam",
		"GT" => "Guatemala",
		"GG" => "Guernsey",
		"GN" => "Guinea",
		"GW" => "Guinea-Bissau",
		"GY" => "Guyana",
		"HT" => "Haiti",
		"HM" => "Heard Island and McDonald Islands",
		"HN" => "Honduras",
		"HK" => "Hong Kong SAR China",
		"HU" => "Hungary",
		"IS" => "Iceland",
		"IN" => "India",
		"ID" => "Indonesia",
		"IR" => "Iran",
		"IQ" => "Iraq",
		"IE" => "Ireland",
		"IM" => "Isle of Man",
		"IL" => "Israel",
		"IT" => "Italy",
		"JM" => "Jamaica",
		"JP" => "Japan",
		"JE" => "Jersey",
		"JT" => "Johnston Island",
		"JO" => "Jordan",
		"KZ" => "Kazakhstan",
		"KE" => "Kenya",
		"KI" => "Kiribati",
		"KW" => "Kuwait",
		"KG" => "Kyrgyzstan",
		"LA" => "Laos",
		"LV" => "Latvia",
		"LB" => "Lebanon",
		"LS" => "Lesotho",
		"LR" => "Liberia",
		"LY" => "Libya",
		"LI" => "Liechtenstein",
		"LT" => "Lithuania",
		"LU" => "Luxembourg",
		"MO" => "Macau SAR China",
		"MK" => "Macedonia",
		"MG" => "Madagascar",
		"MW" => "Malawi",
		"MY" => "Malaysia",
		"MV" => "Maldives",
		"ML" => "Mali",
		"MT" => "Malta",
		"MH" => "Marshall Islands",
		"MQ" => "Martinique",
		"MR" => "Mauritania",
		"MU" => "Mauritius",
		"YT" => "Mayotte",
		"FX" => "Metropolitan France",
		"MX" => "Mexico",
		"FM" => "Micronesia",
		"MI" => "Midway Islands",
		"MD" => "Moldova",
		"MC" => "Monaco",
		"MN" => "Mongolia",
		"ME" => "Montenegro",
		"MS" => "Montserrat",
		"MA" => "Morocco",
		"MZ" => "Mozambique",
		"MM" => "Myanmar [Burma]",
		"NA" => "Namibia",
		"NR" => "Nauru",
		"NP" => "Nepal",
		"NL" => "Netherlands",
		"AN" => "Netherlands Antilles",
		"NT" => "Neutral Zone",
		"NC" => "New Caledonia",
		"NZ" => "New Zealand",
		"NI" => "Nicaragua",
		"NE" => "Niger",
		"NG" => "Nigeria",
		"NU" => "Niue",
		"NF" => "Norfolk Island",
		"KP" => "North Korea",
		"VD" => "North Vietnam",
		"MP" => "Northern Mariana Islands",
		"NO" => "Norway",
		"OM" => "Oman",
		"PC" => "Pacific Islands Trust Territory",
		"PK" => "Pakistan",
		"PW" => "Palau",
		"PS" => "Palestinian Territories",
		"PA" => "Panama",
		"PZ" => "Panama Canal Zone",
		"PG" => "Papua New Guinea",
		"PY" => "Paraguay",
		"YD" => "People's Democratic Republic of Yemen",
		"PE" => "Peru",
		"PH" => "Philippines",
		"PN" => "Pitcairn Islands",
		"PL" => "Poland",
		"PT" => "Portugal",
		"PR" => "Puerto Rico",
		"QA" => "Qatar",
		"RO" => "Romania",
		"RU" => "Russia",
		"RW" => "Rwanda",
		"RE" => "Réunion",
		"BL" => "Saint Barthélemy",
		"SH" => "Saint Helena",
		"KN" => "Saint Kitts and Nevis",
		"LC" => "Saint Lucia",
		"MF" => "Saint Martin",
		"PM" => "Saint Pierre and Miquelon",
		"VC" => "Saint Vincent and the Grenadines",
		"WS" => "Samoa",
		"SM" => "San Marino",
		"SA" => "Saudi Arabia",
		"SN" => "Senegal",
		"RS" => "Serbia",
		"CS" => "Serbia and Montenegro",
		"SC" => "Seychelles",
		"SL" => "Sierra Leone",
		"SG" => "Singapore",
		"SK" => "Slovakia",
		"SI" => "Slovenia",
		"SB" => "Solomon Islands",
		"SO" => "Somalia",
		"ZA" => "South Africa",
		"GS" => "South Georgia and the South Sandwich Islands",
		"KR" => "South Korea",
		"ES" => "Spain",
		"LK" => "Sri Lanka",
		"SD" => "Sudan",
		"SR" => "Suriname",
		"SJ" => "Svalbard and Jan Mayen",
		"SZ" => "Swaziland",
		"SE" => "Sweden",
		"CH" => "Switzerland",
		"SY" => "Syria",
		"ST" => "São Tomé and Príncipe",
		"TW" => "Taiwan",
		"TJ" => "Tajikistan",
		"TZ" => "Tanzania",
		"TH" => "Thailand",
		"TL" => "Timor-Leste",
		"TG" => "Togo",
		"TK" => "Tokelau",
		"TO" => "Tonga",
		"TT" => "Trinidad and Tobago",
		"TN" => "Tunisia",
		"TR" => "Turkey",
		"TM" => "Turkmenistan",
		"TC" => "Turks and Caicos Islands",
		"TV" => "Tuvalu",
		"UM" => "U.S. Minor Outlying Islands",
		"PU" => "U.S. Miscellaneous Pacific Islands",
		"VI" => "U.S. Virgin Islands",
		"UG" => "Uganda",
		"UA" => "Ukraine",
		"SU" => "Union of Soviet Socialist Republics",
		"AE" => "United Arab Emirates",
		"GB" => "United Kingdom",
		"US" => "United States",
		"ZZ" => "Unknown or Invalid Region",
		"UY" => "Uruguay",
		"UZ" => "Uzbekistan",
		"VU" => "Vanuatu",
		"VA" => "Vatican City",
		"VE" => "Venezuela",
		"VN" => "Vietnam",
		"WK" => "Wake Island",
		"WF" => "Wallis and Futuna",
		"EH" => "Western Sahara",
		"YE" => "Yemen",
		"ZM" => "Zambia",
		"ZW" => "Zimbabwe",
		"AX" => "Åland Islands",
	);
 	return $countryList;

 }


function add_button($location,$message){
$a ='<a class="btn btn-success btn-flat btn-sm pull-right" title="" tooltip href="'.URL_ROOT.$location.'" >
        <i class="fa fa-user-plus"></i> '.$message.'</a> ';
return $a;
}

function update_button($location,$id){

$a = '<a class="btn btn-info btn-flat btn-xs" title="" tooltip href="'.URL_ROOT.$location.'/'.e($id).'" style="background-color:#128CDF;">
<i class="fa fa-pencil"></i> Modify</a>';


return $a;

}

function delete_button($location,$id){

$a = '


<button type="button" class="btn btn-danger btn-flat btn-xs" data-toggle="modal" data-target="#deleteModal'.$id.'"><i class="fa fa-trash"></i> Remove</button>            

<div id="deleteModal'.$id.'" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Delete !</h4>
      </div>
      <div class="modal-body">
        <p>Are you sure you want to Delete ?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">NO</button>
        <a class="btn btn-danger" title="" tooltip href="'.URL_ROOT.$location.'/'.e($id).'">
		DELETE</a>
      </div>
    </div>

  </div>
</div>

';


return $a;

}


