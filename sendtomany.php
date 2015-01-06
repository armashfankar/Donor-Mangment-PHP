<?php
include 'library.php'; // include the library file
include "classes/class.phpmailer.php"; // include the class name
$mail	= new PHPMailer; // call the class 
$mail->IsSMTP(); 
$mail->Host = SMTP_HOST; //Hostname of the mail server
$mail->Port = SMTP_PORT; //Port of the SMTP like to be 25, 80, 465 or 587
$mail->SMTPAuth = true; //Whether to use SMTP authentication
$mail->Username = SMTP_UNAME; //Username for SMTP authentication any valid email created in your domain
$mail->Password = SMTP_PWORD;
$mail->AddReplyTo("info@ecf.com", "Reply name"); //reply-to address
$mail->SetFrom("admin@ecf.com", "ECF"); //From address of the mail
// put your while loop here like below,
$mail->Subject = "Your ECF reminder"; //Subject od your mail
$recipients = array(
   'talktoarmash@gmail.com' => 'armash talk',
   'armash.fankar@gmail.com' => 'armash fankar'
);
foreach($recipients as $email => $name){
	// it will display the emails of all users in their Mailbox 'To' area. Simple multiple mail.
	$mail->AddAddress($email, $name); //To address who will receive this email
	$mail->MsgHTML("<b>Hi,Your are Successfully Registered on ECF.ORG.IN Please Confirm Your Registration!.. <br/><br/>by <a href='http://www.ecf.org.in'>Equal Community Foundation </a></b>"); //Put your body of the message you can place html code here
	$mail->AddAttachment("images/11.gif"); //Attach a file here if any or comment this line (usimg absolute path), 
	$send = $mail->Send(); //Send the mails
	// if you want to does not show other users email addresses like newsletter, daily, weekly, subscription emails means use the below line to clear previous email address
	$mail->ClearAddresses();
}
	if($send){
		echo '<center><h3 style="color:#009933;">Mail sent successfully</h3></center>';
	}
	else{
		echo '<center><h3 style="color:#FF3300;">Mail error: </h3></center>'.$mail->ErrorInfo;
	}
?>
