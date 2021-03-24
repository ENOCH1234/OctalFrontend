<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" type="images/png" sizes="16x16" href="images/bsf_logo.png">
    <title>BSF AAUA | Contact Us</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- ElegantFonts CSS -->
    <link rel="stylesheet" href="css/elegant-fonts.css">

    <!-- themify-icons CSS -->
    <link rel="stylesheet" href="css/themify-icons.css">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="css/swiper.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="style.css">
</head>
<body class="single-page contact-page">

<?php include ("includes/header.php"); ?>

    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>Contact Us</h1>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .page-header -->

    <div class="contact-page-wrap">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-5">
                    <div class="entry-content">
                        <h2>Get In touch with us</h2>

                        <p>Your feedback with will be treated with much importance.</p>
                        <p>With much love we greet you. The expectancy is not based on material availabilities; so, we are visioned to build a Spiritual Environment with Serenity!</p>

                        <ul class="contact-social d-flex flex-wrap align-items-center">
                            <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fa fa-behance"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>

                        <ul class="contact-info p-0">
                            <li><i class="fa fa-phone"></i><span>+2348130573141, +2348141209128, +2348151851582</span></li>
                            <li><i class="fa fa-envelope"></i><span>bsfaaualovefamily@gmail.com</span></li>
                            <li><i class="fa fa-map-marker"></i><span>BSF Auditorium, Adjacent Agape Fellowship, Akungba Akoko, Ondo State, Nigeria.</span></li>
                        </ul>
                    </div>
                </div><!-- .col -->

                <div class="col-12 col-lg-7">
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
                    <form class="contact-form" action="contact.php" method="POST">
                        <input type="text" name="name" placeholder="Name" required />
                        <input type="email" name="mail" placeholder="Email" required />
                        <input type="text" name="subject" placeholder="Subject" required />
                        <textarea rows="15" cols="6" name="message" placeholder="Message" required=""></textarea>

                        <span>
                            <input class="btn gradient-bg" type="submit" name="submit_form" value="Send Message">
                        </span>
                    </form><!-- .contact-form -->

                </div><!-- .col -->

                <div class="col-12">
                    <div class="contact-gmap">
                        <iframe width="600" height="450" frameborder="0" style="border:0" src="https://goo.gl/maps/dh2UKA8smmCKCFoC6" allowfullscreen></iframe>
                    </div>
                </div>
            </div><!-- .row -->
        </div><!-- .container -->
    </div>

    <?php include ("includes/footer.php"); ?>

    <script type='text/javascript' src='js/jquery.js'></script>
    <script type='text/javascript' src='js/jquery.collapsible.min.js'></script>
    <script type='text/javascript' src='js/swiper.min.js'></script>
    <script type='text/javascript' src='js/jquery.countdown.min.js'></script>
    <script type='text/javascript' src='js/circle-progress.min.js'></script>
    <script type='text/javascript' src='js/jquery.countTo.min.js'></script>
    <script type='text/javascript' src='js/jquery.barfiller.js'></script>
    <script type='text/javascript' src='js/custom.js'></script>

</body>
</html>