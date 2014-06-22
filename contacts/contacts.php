<?php

if($_REQUEST['submit'])
  {
	  $name=$_REQUEST['txtName'];
	  $email=$_REQUEST['txtEmail'];
	  $city=$_REQUEST['cityName'];
	  $mobile=$_REQUEST['txtPhone'];
	
	  $headers  = "MIME-Version: 1.0\r\n";
	  $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
	  $headers .= "From: ".$email." \r\n";
	  $to="info@opendemat.com"; 
	  $subject="Contact From".$email."/ Message";
	  $message="<table>";
	  $message.="<tr><td valign='top'><b>Name:</td><td valign='top'>".stripslashes($name)." </td></tr>";
	  $message.="<tr><td valign='top'><b>Email Address:</td><td valign='top'>".stripslashes($email)." </td></tr>";
	  $message.="<tr><td valign='top'><b>Mobile No.:</td><td valign='top'>".stripslashes($mobile)." </td></tr>";
	  $message.="<tr><td valign='top'><b>City:</td><td valign='top'>".stripslashes($city)." </td></tr>";
	  $message.="</table>";
	 $send_contact=mail($to, $subject, $message, $headers);
	 if($send_contact)
	 {
	  $msg ="We have received your contact information";
  }
  else
  {
  $msg="Error Occured!!";
  }
  }
?>