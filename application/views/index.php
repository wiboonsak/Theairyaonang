<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>The Airy Aonang, Krabi Thailand</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
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
<link rel="shortcut icon" href="<?php echo base_url('images/favicon.ico')?>" type="image/x-icon" />

<link rel="stylesheet" href="<?php echo base_url('css/global.css')?>">
<link class="colour" rel="stylesheet" href="<?php echo base_url('css/colour-blue.css')?>">
<link class="pattern" rel="stylesheet" href="<?php echo base_url('css/pattern-pentagon.css')?>">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
</head>
<body class="home2 fullwidth">
<!-- Navigation | START -->
<?php include("header.php"); ?>
<!-- Navigation | END -->

<!-- Header | START -->
<header>
    <!-- Featured Slider | START -->
    <div id="featured">
        <div class="slider">  
  <?php foreach ($loadSlide->result() AS $data) {
                    
                         
?>            
        	<div class="item" style="background-image:url(<?php echo base_url('uploadfile/banner/') . $data->first_pic ?>);">
                <div class="details">
                    <div class="title"><span><?php echo $data->desc_en?></span></div>
                    <div class="buttoncontainer"><a href="#" class="button"><span data-hover="<?php echo $data->desc_en3?>"><?php echo $data->desc_en2?></span></a></div>
                </div>
            </div>
  <?php }?>  
        </div>
        <div class="centre">
            <div class="nav">
                <a class="prev"><i class="fa fa-chevron-left"></i></a>
                <a class="next"><i class="fa fa-chevron-right"></i></a>
            </div>
        </div>
    </div>
    <!-- Featured Slider | END -->
    
    <!-- Check Rates Banner | START  -->
    <div id="check">
        <div class="centre">
            <form action="<?php echo base_url('Contact')?>" method="post">
                <div class="field calendar"><input name="arrival" type="text" placeholder="Arrival" id="arrival" readonly /><i class="fa fa-calendar-o"></i></div>
                <div class="field calendar"><input name="departure" type="text" placeholder="Departure" id="departure" readonly /><i class="fa fa-calendar-o"></i></div>
                <div class="field select">
                    <select name="rooms">
                        <option value="1 Room">1 Room</option>
                        <option value="2 Rooms">2 Rooms</option>
                        <option value="3 Rooms">3 Rooms</option>
                    </select>
                    <i class="fa fa-chevron-down"></i>
                </div>
                <div class="field select">
                    <select name="adults">
                        <option value="1 Adult">1 Adult</option>
                        <option value="2 Adults">2 Adults</option>
                        <option value="3 Adults">3 Adults</option>
                        <option value="4 Adults">4 Adults</option>
                        <option value="5 Adults">5 Adults</option>
                    </select>
                    <i class="fa fa-chevron-down"></i>
                </div>
                <div class="field select">
                    <select name="children">
                        <option value="0 Children">0 Children</option>
                        <option value="1 Child">1 Child</option>
                        <option value="2 Children">2 Children</option>
                        <option value="3 Children">3 Children</option>
                        <option value="4 Children">4 Children</option>
                    </select>
                    <i class="fa fa-chevron-down"></i>
                </div>
                <button><span data-hover="Book a Room">Book a Room</span></button>
            </form>
        </div>
    </div>
    <!-- Check Rates Banner | END -->
    
</header>
<!-- Header | END -->


<div id="container">
    <!-- Content | START -->
    <main>
    	<div class="centre">
           <div id="content" style="margin: 0px !important">
                <h2><strong style="color: #DD0003">The Airy Aonang</strong> SERVICED APARTMENT | CONTEMPORARY STYLE</h2>
                <p>Situated on the main road of Ao Phanang (Aonang). The Airy Aonang is an ideal base for visitor who wish to relax and enjoy their holiday in quite surrounding and within walking distance to the beach, shopping and enterainment offer at Aonang.</p>                
            </div>
            
           <!-- List Items (Rooms) | START -->
            <section id="rooms" class="list grid">
               <?php
    $loadroomData = $this->Control_model->loadroomData();
    foreach ($loadroomData->result() AS $loadroomData2) {
?> 
                <div class="item">
                	<div class="container">
                        <div class="imgcontainer"><img alt="" src="<?php echo base_url('uploadfile/room/'). $loadroomData2->first_pic ?>" width="380" height="380" /></div>
                        <div class="details">
                            <a href="<?php echo base_url('Accommodation/room/').$loadroomData2->id?>">
                                <h3 class="title"><?php echo $loadroomData2->room_type_en?><br />
                                <span>The Airy Aonang</span></h3>
                                <p><?php echo $loadroomData2->room_short_info_en?></p>
                                <div class="button"><span data-hover="View Room">View Room</span></div>
                            </a>
                        </div>
                    </div>
                </div>
    <?php }?>
<!--
                <div class="item">
                	<div class="container">
                        <div class="imgcontainer"><img alt="" src="system/images/room/3.jpg" width="380" height="380" /></div>
                        <div class="details">
                            <a href="room.php">
                                <h3 class="title">Standard Room<br />
                                <span>Stay from 8,000 Baht per night</span></h3>
                                <p>The apartments at The Airy Aonang are air-conditioned and offer a private bathroom, wireless internet access and a refrigerator. They are also fitted with a shower and cable/satellite channels.</p>
                                <div class="button"><span data-hover="View Room">View Room</span></div>
                            </a>
                        </div>
                    </div>
                </div>
-->
            </section>
            <!-- List Items (Rooms) | END -->
           
         
           
            
            
            <!-- USP Boxes | START 
            <section class="usp">
            	<div class="box">
                	<i class="fa fa-trophy"></i>
                	<h3>Located in heart of Krabi</h3>
                	<p>Designed for both business and leisure travel, The Airy Aonang Hotel is ideally situated in Ao Nang; one of the city's most popular locales. </p>
                </div>
                <div class="box">
                	<i class="fa fa-cutlery"></i>
                	<h3>340 meters to the beach</h3>
                	<p>The property is within easy reach of Ao Phra Nang. Ton Sai Beach is also nearby.</p>
                </div>
                <div class="box">
                	<i class="fa fa-user"></i>
                	<h3>Free Wi-Fi in all rooms!</h3>
                	<p>Free Wi-Fi in all rooms, ticket service, luggage storage, Wi-Fi in public areas.</p>
                </div>
            </section>
            <!-- USP Boxes | END -->
        </div>
    </main>
    
    
    <!-- Content | END -->
    
    
    <!-- Gallery Slider | START-->
    <div id="galleryslider">
    	<div class="slidecontainer">
            <div class="slider"></div>
            <div class="centre">
                <div class="nav">
                    <a class="prev"><i class="fa fa-chevron-left"></i></a>
                    <a class="next"><i class="fa fa-chevron-right"></i></a>
                </div>
            </div>
        </div>
        <a href="<?php echo base_url('Gallery')?>" class="button"><span data-hover="Browse Our Gallery">Browse Our Gallery</span></a>
    </div>
    <!-- Gallery Slider | END -->
    
 
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
<script src="<?php echo base_url('js/plugins.js')?>"></script>
<script src="<?php echo base_url('js/global.js')?>"></script>
</body>
</html>