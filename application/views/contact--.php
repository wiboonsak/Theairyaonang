<?php
$alert = null;
if(isset($_POST['send'])=="sendform"){
	
// Validation Check

$continue = true;
$validation = "";

if(empty($_POST['contact-name'])){
	$continue = false;
	$validation = "First Name, ";
}
if(empty($_POST['contact-email'])){
	$continue = false;
	$validation .= "Email Address, ";
}
if(empty($_POST['contact-phone'])){
	$continue = false;
	$validation .= "Phone Number";
}

// Validation OK, send email

if($continue===true){
		
	require 'system/email/phpmailer/PHPMailerAutoload.php';
	
	// Hotel Details
	
	$hotel_name = "The Airy Aonang";
	//$hotel_email = "rsvn@theairyaonang.com";
	$hotel_email = "iya555@hotmail.com";
	// Send Email to Guest
	
	$message = file_get_contents('system/email/template-guest.php');
	$message = str_replace('[name]', $_POST['contact-name'], $message);
	$message = str_replace('[email]', $_POST['contact-email'], $message);
	$message = str_replace('[phone]', $_POST['contact-phone'], $message);
	$message = str_replace('[arrival]', $_POST['contact-arrival'], $message);
	$message = str_replace('[departure]', $_POST['contact-departure'], $message);
	$message = str_replace('[rooms]', $_POST['contact-rooms'], $message);
	$message = str_replace('[adults]', $_POST['contact-adults'], $message);
	$message = str_replace('[children]', $_POST['contact-children'], $message);
	$message = str_replace('[message]', $_POST['contact-message'], $message);
	
	$mail = new PHPMailer;
	$mail->setFrom($hotel_email, $hotel_name);
	$mail->addAddress($_POST['contact-email'], $_POST['contact-name']);
	$mail->Subject = $hotel_name.' Booking Request';
	$mail->MsgHTML($message);
	$mail->IsHTML(true);
	$mail->charSet = "UTF-8"; 
	$mail->send();
	
	// Send Email to Hotel
	
	$message = file_get_contents('system/email/template-hotel.php');
	$message = str_replace('[name]', $_POST['contact-name'], $message);
	$message = str_replace('[email]', $_POST['contact-email'], $message);
	$message = str_replace('[phone]', $_POST['contact-phone'], $message);
	$message = str_replace('[arrival]', $_POST['contact-arrival'], $message);
	$message = str_replace('[departure]', $_POST['contact-departure'], $message);
	$message = str_replace('[rooms]', $_POST['contact-rooms'], $message);
	$message = str_replace('[adults]', $_POST['contact-adults'], $message);
	$message = str_replace('[children]', $_POST['contact-children'], $message);
	$message = str_replace('[message]', $_POST['contact-message'], $message);
	
	$mail = new PHPMailer;
	$mail->setFrom($_POST['contact-email'], $_POST['contact-name']);
	$mail->addAddress($hotel_email, $hotel_name);
	$mail->Subject = 'Booking Request from '.$_POST['contact-name'];
	$mail->MsgHTML($message);
	if (!$mail->send()) {
		$alert = "<div class='alert error'><i class='fa fa-exclamation-circle'></i> <strong>There was an error, please call us to make a booking.</strong></div>";
	}
	else {
		$alert = "<div class='alert success'><i class='fa fa-check-circle'></i> <strong>Thank you for your booking request, we will get back to you as soon as possible.</strong> To avoid missing out, please give us a call so that we may assist you sooner.</div>";
	}
}
else {
	$alert = "<div class='alert validate'><i class='fa fa-exclamation-circle'></i> Please fill out the following fields: <strong>".$validation."</strong></div>";
}
}
?>
<!DOCTYPE HTML>

<html>
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>The Airy Aonang, Krabi Thailand</title>
<meta name="keywords" content="the airy, the airy aonang, room, rest, apartment, service, luxury, duluxe, guesthouse, travel, krabi, aonang, ao-nang, thailand,">
<meta name="description" content="The Airy Aonang is a serviced-apartment. This contemporary style accommodation comforts you with its easy designed-rooms, pleasant service and atmosphere. Its crystal clear mirror decoration allows you to view from inside our green courtyard and to expose to the soul of street life.">
<meta name="stats-in-th" content="e8s3" />
<meta name="AUTHOR" content="theairyaonang.com">
<meta name="COPYRIGHT" content="theairyaonang.com">
<meta name="GENERATOR" content="Boothstrap,Javascript,PHP,CSS,Editplus">
<meta name="ABSTRACT" content="theairyaonang.com">
<meta name="ROBOTS" content="index,follow">
<meta name="Distribution" content="Global">
<meta name="RATING" content="General">
<meta name="LANGUAGE" content="en-th,th,en,thai,eng">
<meta name="revisit-after" content="1 days" />
<meta content="follow, index, all" name="robots">

<link rel="stylesheet" href="system/css/global.css">
<link class="colour" rel="stylesheet" href="system/css/colour-blue.css">
<link class="pattern" rel="stylesheet" href="system/css/pattern-pentagon.css">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
</head>
<body class="fullwidth">
<!-- Navigation | START -->
<?php include("header.php"); ?>
<!-- Navigation | END -->
<div id="container">
	<!-- Header | Start -->
	<header>
    	<div id="header">
        	<div class="h1">
                <h1><span>Contact</span>
                <span class="tagline">Get in touch with The Airy Aonang</span></h1>
            </div>
        </div>
    </header>
    <!-- Header | END -->
    <!-- Content | START -->
    <main>
    	<div class="centre">
            <!-- Contact Form | START -->
        	<div id="contact">
            	<img src="system/images/contact.jpg" width="1200" height="400" alt="" />
                <?=$alert;?>
                <form name="contact" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                	<?php
					(isset($_POST["rooms"])) ? $rooms = $_POST["rooms"] : $rooms=1;
					(isset($_POST["adults"])) ? $adults = $_POST["adults"] : $adults=1;
					(isset($_POST["children"])) ? $children = $_POST["children"] : $children=0;
					?>
                    <div class="col">
                        <div class="field mandatory"><input name="contact-name" type="text" placeholder="Your Name" id="contact-name" /></div>
                        <div class="field mandatory"><input name="contact-email" type="text" placeholder="Email Address" id="contact-email" /></div>
                        <div class="field mandatory"><input name="contact-phone" type="text" placeholder="Phone Number" id="contact-phone" /></div>
                    </div>
                    <div class="col">
                        <div class="field calendar"><input name="contact-arrival" type="text" placeholder="Arrival Date" id="contact-arrival" value="<?php if (isset($_POST['arrival']) && !empty($_POST['arrival'])) { echo $_POST['arrival']; } else { echo '';} ?>" readonly /><i class="fa fa-calendar-o"></i></div>
                        <div class="field calendar"><input name="contact-departure" type="text" placeholder="Departure Date" id="contact-departure" value="<?php if (isset($_POST['departure']) && !empty($_POST['departure'])) { echo $_POST['departure']; } else { echo '';} ?>" readonly /><i class="fa fa-calendar-o"></i></div>
                        <div class="select">
                        	<select name="contact-rooms" id="contact-rooms" class="infants">
                                <option <?php if ($rooms == 1 ) echo 'selected'; ?> value="1">1 Room</option>
                                <option <?php if ($rooms == 2 ) echo 'selected'; ?> value="2" >2 Rooms</option>
                                <option <?php if ($rooms == 3 ) echo 'selected'; ?> value="3" >3 Rooms</option>
                            </select>
                            <select name="contact-adults" id="contact-adults" class="adults">
                                <option <?php if ($adults == 1 ) echo 'selected'; ?> value="1" >1 Adult</option>
                                <option <?php if ($adults == 2 ) echo 'selected'; ?> value="2">2 Adults</option>
                                <option <?php if ($adults == 3 ) echo 'selected'; ?> value="3" >3 Adults</option>
                                <option <?php if ($adults == 4 ) echo 'selected'; ?> value="4" >4 Adults</option>
                                <option <?php if ($adults == 5 ) echo 'selected'; ?> value="5" >5 Adults</option>
                            </select>
                            <select name="contact-children" id="contact-children" class="children">
                                <option <?php if ($children == 0 ) echo 'selected'; ?> value="0">0 Children</option>
                                <option <?php if ($children == 1 ) echo 'selected'; ?> value="1" >1 Child</option>
                                <option <?php if ($children == 2 ) echo 'selected'; ?> value="2" >2 Children</option>
                                <option <?php if ($children == 3 ) echo 'selected'; ?> value="3" >3 Children</option>
                                <option <?php if ($children == 4 ) echo 'selected'; ?> value="4" >4 Children</option>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="field"><textarea name="contact-message" placeholder="Message" id="contact-message"></textarea></div>
                    </div>
                    <button name="send" value="sendform"><span data-hover="Send Booking Request">Send Booking Request</span></button>
                </form>
            </div>
            <!-- Contact Form | END -->
            <h2 style="margin:0;"><strong>+61 1 23456789</strong></h2>
            <p style="margin:0;"><a href="mailto:rsvn@theairyaonang.com">rsvn@theairyaonang.com</a><br />
            440 M.2 Aonang Beach, Ao Nang, Krabi, Thailand<br />
            <a href="https://goo.gl/maps/5cY1qe2Kip42" target="_blank"><i class="fa fa-map-marker"></i> Explore Our Location</a></p>
        </div>
        <!-- Google Map | START -->        
    	<div id="map">            
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3950.6735517481525!2d98.82295131523983!3d8.032553994215862!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd163870106a58db1!2sAonang+Easy+Room!5e0!3m2!1sth!2sth!4v1542948085824" width="1200" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <!-- Google Map | END -->
    </main>
    <!-- Content | END -->

	
	 <!-- Footer | START -->
    <?php include("footer.php"); ?>
    <!-- Footer | END -->
	
	
</div>
<!-- Promo Popup | START -->
<div id="pop">
	<img alt="" src="http://dummyimage.com/400x150" width="400" height="150" />
    <div class="container">
        <p class="title"><strong>Our latest special offers,</strong><br />
        straight to your inbox</p>
        <p>Stay up to date with the latest specials from Base Hotel. Subscribe and save on your next stay.</p>
        <form>
            <input name="email" type="text" placeholder="Your email address" />
            <button><span data-hover="Subscribe">Subscribe</span></button>
        </form>
        <p class="close closepop"><a>Continue browsing site</a></p>
        <i class="fa fa-close closepop"></i>
    </div>
</div>
<!-- Promo Popup | END -->
<script src="system/js/plugins.js"></script>
<script src="system/js/global.js"></script>
</body>
</html>