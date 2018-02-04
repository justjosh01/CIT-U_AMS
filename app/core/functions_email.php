<?php

function verify_email($email,$name,$token,$type){

  	$subject = "Please verify your email address";
  	$comment = "
Hi ".ucwords(strtolower($name)).",

Thanks for getting started with CIT-U Alumni Monitoring System! 

We need a little more information to complete your registration,including confirmation of your email address. Click below to confirm your email address: ".URL.$type."/verify_email/".$token."

If you have problems, please paste the above URL into your web browser ".URL.$type."/verify_email/".$token."


Thanks,
AMS Team";
   		
   		 
  	//send email
	if(mail($email, $subject, $comment)){
	// 	 //Email response
	// 	  // echo "Verify your email address to access all of INQUIRYPage<br>";
	// 	  // echo "We’ve just sent an email to your address: ".$email."<br>";
	// 	  // echo "Please check your email and click on the link provided to verify your address.";
	}


}

function activate_account($email,$name,$token,$type){

  	$subject = "Please verify your email address";
  	$comment = "
Hi ".ucwords(strtolower($name)).",

Thanks for getting started with CIT-U Alumni Monitoring System! 

We need a little more information to complete your activation,including confirmation of your email address. Click below to confirm your email address: 
".URL.$type."/activate_account/".$token."

If you have problems, please paste the above URL into your web browser ".URL.$type."/activate_account/".$token."


Thanks,
AMS Team";

	//send email
	if(mail($email, $subject, $comment)){
		 //Email response
		  // echo "Verify your email address to access all of INQUIRYPage<br>";
		  // echo "We’ve just sent an email to your address: ".$email."<br>";
		  // echo "Please check your email and click on the link provided to verify your address.";
	}
   		
   

}



function reset_password($data){

	$email = $data['email'];
	$subject = "Reset Password";
	$comment = "
Hi ".ucwords(strtolower($data['name'])).",

Please click the address below to reset your CIT-U Alumni Monitoring System account password.

".URL.$data['type']."/reset_password/".e($data['id'])."

If you did not request a password reset please disregard this email.

Thanks,
AMS Team";
	   		

	   		// echo $comment;
	   		 
	  	//send email
	if(mail($email, $subject, $comment)){
			 //Email response
			  // echo "Verify your email address to access all of INQUIRYPage<br>";
			  // echo "We’ve just sent an email to your address: ".$email."<br>";
			  // echo "Please check your email and click on the link provided to verify your address.";
	}


}
