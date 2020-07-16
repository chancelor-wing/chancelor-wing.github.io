<?php

if(empty($_POST['firstName']) || empty($_POST['lastName']) || empty($_POST['adr']) || empty($_POST['city']) || empty($_POST['email']) || empty($_POST['phone']) || empty($_POST['position'])) 
{
	die('Error: Missing variables');
}

$firstName=$_POST['firstName'];
$lastName=$_POST['lastName'];
$streetAddress=$_POST['adr'];
$city=$_POST['city'];
$company=$_POST['comp'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$interest=$_POST['position'];
$comments=$_POST['message'];

$to='cwing625@gmail.com';
$subject = 'Premier Service';
$headers = 'From: '.$email."\r\n" .
	'Reply-To: '.$email."\r\n" .
	'X-Mailer: PHP/' . phpversion();
$body='You have got a new message from the contact form on your website.'."\n\n";
$body.='First Name: '.$firstName."\n";
$body.='Last Name: '.$lastName."\n";
$body.='Street Address: '.$streetAddress."\n";
$body.='City: '.$city."\n";
$body.='Company: '.$company."\n";
$body.='Email: '.$email."\n";
$body.='Phone: '.$phone."\n";
$body.='Interested in: '.$interest."\n";
$body.='Comments: '.$comments."\n";

	
if(mail($to, $subject, $body, $headers)) {
	die('Mail sent');
} else {
	die('Error: Mail failed');
}

?>