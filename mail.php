	<?php
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;
        function data_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
		return $data;
		}

	if (isset($_POST['submit_form'])){
		$name = data_input($_POST['name']);
		$email = data_input($_POST['mail']);
        $subject = data_input($_POST['subject']);
        $message1 = data_input($_POST['message']);
		
		$message = "
			<h1><b>".$_POST['subject']."</b></h1>
			<br /><br />
			<p><i>Sender Name:</i> <b>".$_POST['name']."</b></p>
			<br>
			<p><i>Sender Email:</i> <b>".$_POST['mail']."</b></p>
			<br>
			<p><i>Message:</i> <b>".$_POST['message']."</b></p>
			";

			require_once "vendor/autoload.php";

			//PHPMailer Object
			$mail = new PHPMailer;

			//From email address and name
			$mail->From = "$email";
			$mail->FromName = "$name";

			//To address and name
			$mail->addAddress("olayodeenoch@gmail.com", "Olayode Enoch");
			$mail->addAddress("olayodeenoch@gmail.com"); //Recipient name is optional

			//Address to which recipient will reply
			$mail->addReplyTo("admin@bsfaauabuilds.org.ng", "Reply");

			//CC and BCC
			$mail->addCC("olayodeenoch8@gmail.com");
			$mail->addBCC("olayodeenoch8@gmail.com");

			//Send HTML or Plain Text email
			$mail->isHTML(true);

			$mail->Subject = "$subject";
			$mail->Body = "<i>$message</i>";
			$mail->AltBody = "$message";

			if(!$mail->send()) 
			{
				echo "Mailer Error: " . $mail->ErrorInfo;
			} 
			else 
			{
				echo "Message has been sent successfully";
			}
		}
			?>