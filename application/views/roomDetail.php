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
	
<body class="fullwidth">
<!-- Navigation | START -->
<?php include("header.php"); ?>
<!-- Navigation | END -->

<div id="container">
	<header>
    	<div id="header">
        	<div class="h1">
                <h1><span><?php echo $roomName?></span>
                <span class="tagline">The Airy Aonang</span></h1>
            </div>
        </div>
        <!-- Check Rates Banner | START -->
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
    <!-- Content | START -->
    <main>
    	<div class="centre">
        	<!-- Slideshow | START -->
                <?php 
                    foreach ($roomList->result() AS $roomList2){}?>
        	<div id="slideshow">
                <div class="slider">
                    <?php 
                    foreach ($imagesList->result() AS $img){?>
                    <div class="item"><img alt="" src="<?php echo base_url('uploadfile/room/').$img->image_name?>" width="1200" height="600" /></div>
                    <?php }?>
                </div>
                <div class="nav">
                    <a class="prev"><i class="fa fa-chevron-left"></i></a>
                    <a class="next"><i class="fa fa-chevron-right"></i></a>
                </div>
            </div>
            <!-- Slideshow | END -->
        	<div id="left">
                <div id="content" style="text-align: left">
                    <h2><strong><?php echo $roomName?></strong></h2>
                    <p style="text-align: left"><?php echo $roomList2->room_info_en?></p>
                        <?php if($roomList2->TERMS_AND_CONDITIONS!=''){?>
					<p style="text-align: left"> 
						<h3 style="text-align: left">Terms and Conditions:</h3>
						<ul><?php echo $roomList2->TERMS_AND_CONDITIONS?> 
						</ul>
					</p>
                        <?php }?>
                                        <?php if($roomList2->CANCELLATION!=''){?>
					<p style="text-align: left"> 
						<h3 style="text-align: left">Cancellation Policies:</h3>
						<ul><?php echo $roomList2->CANCELLATION?>
						</ul>
					</p>
				 <?php }?>
                                         <?php if($roomList2->PAYMENT!=''){?>
					<p style="text-align: left"> 
						<h3 style="text-align: left">Payment Term:</h3>
						<ul><?php echo $roomList2->PAYMENT?>
						</ul>
					</p>
                   <?php }?>
                   <p style="text-align: left"> 
						<h3 style="text-align: left">Facilities Accomodation:</h3>
						<ul class="tags" style="text-align: center">    
                                                    <?php foreach ($FacilitiesData->result() AS $FacilitiesData2){?>
							<li><?php echo $FacilitiesData2->facilities?></li>
                                                    <?php }?>
						</ul>
					</p>
                 
                    
                    <!-- USP Boxes | START -->
                    <section class="usp" style="text-align: center">
                        <div class="box" style=" width: 30% !important;">
                            <i class="fa fa-expand"></i>
                            <h3>Spacious Living Areas</h3>
                            <p>Room Service, Restaurant, Air Conditioned, Non-Smoking Rooms, Refrigerator, Cable / Satellite TV, Bath, TV, Shower, En suite, Private Bathroom</p>
                        </div>
                        <div class="box" style=" width: 30% !important;">
                            <i class="fa fa-wifi"></i>
                            <h3>Free Unlimited Wi-Fi</h3>
                            <p>Free Wi-Fi in all rooms, ticket service, luggage storage, Wi-Fi in public areas.</p>
                        </div>
                        <div class="box" style=" width: 30% !important;">
                            <i class="fa fa-user"></i>
                            <h3>24 Hour Room Service</h3>
                            <p>Staff are available 24/7 and can assist with booking tours and tickets.</p>
                        </div>
                    </section>
                    <!-- USP Boxes | END -->
                </div>
            </div>
            <aside class="layout2">
            	<div id="scroll">
                    <div id="block">
                        <div class="blocktitle"><a href="<?php echo base_url('Contact')?>"><span>Book Now</span></a></div>
                        <!-- Sub Navigation | START 
                        <ul class="nav">
                            <li><a href="room.html">Standard Room</a></li>
                            <li><a href="room.html">Ocean View Room</a></li>
                            <li><a href="room.html">Deluxe Room</a></li>
                            <li><a href="room.html">Junior Suite</a></li>
                            <li><a href="room.html">Premiere Suite</a></li>
                            <li><a href="room.html">3 Bed Penthouse</a></li>
                        </ul>
                        <!-- Sub Navigation | END -->
                    </div>
                    <!-- List Items (Specials Slider) | START 
                    <div id="specials" class="list">
                        <div class="slider">
                        	<div class="item">
                                <img alt="" src="http://dummyimage.com/380x250" width="380" height="250" />
                                <div class="details">
                                    <a href="specials.html">
                                        <div class="title">Family Escape<br />
                                        <span>Activity Package</span></div>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna.<br />
                                        <strong>Stay from $249 per night</strong></p>
                                        <div class="button"><span data-hover="View Special">View Special</span></div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="nav"></div>
                    </div>
                    <!-- List Items (Specials Slider) | END -->
                </div>
            </aside>
        </div>
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
<script src="<?php echo base_url('js/plugins.js')?>"></script>
<script src="<?php echo base_url('js/global.js')?>"></script>
</body>
</html>