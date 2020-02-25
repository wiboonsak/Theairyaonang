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
                <h1><span>Room Rate</span>
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
            
            <div id="content">
                <h2><strong style="color: #DD0003">The Airy Aonang</strong> SERVICED APARTMENT | CONTEMPORARY STYLE</h2>
                <p>Situated in the popular hub of Ao Nang, Aonang Easy Room is within walking distance of several attractions in the local area. Guests can also enjoy complimentary internet access throughout the property. </p>
                <p></p>
                <table>
                    <tr>
                        <th>Type of Room</th>
                         <?php foreach ($season->result() AS $data) { ?>
                        <th><?php echo $data->start_day ?>&nbsp;&nbsp;<?php echo $this->Control_model->getnamemonth($data->start_month); ?>&nbsp;-&nbsp;<?php echo $data->stop_day ?>&nbsp;&nbsp;<?php echo $this->Control_model->getnamemonth($data->stop_month); ?></th>
                          <?php } ?>
                    </tr>
                      <?php 
                                $numroom = $roomData->num_rows(); 
                                foreach ($roomData->result() AS $roomData2) { ?>
                    <tr>
                        <td style="font-size: 14px"><strong><?php echo $roomData2->room_type_en ?></strong></td>
                         <?php $numseason = $season->num_rows();
                                        
                                        foreach ($season->result() AS $data) { ?>
                                            <?php
                                            $n = 1;
                                            $roomid = $roomData2->id;
                                            $seasonid = $data->id;
                                            $getroomrate = $this->Control_model->getroomrate($roomid, $seasonid);
                                            $nuumroomrate = $getroomrate->num_rows();
                                            if($nuumroomrate !=''){
                                            foreach ($getroomrate->result() AS $getroomrate2) {
                                                ?>
                        <td style="text-align: center;font-size: 14px"><?php echo number_format($getroomrate2->room_price) ?> Baht</td>
                                            <?php $n++;}}?>
                                        <?php }?>
                                        <?php }?>
                    </tr>
                  
                  
                    </tr>
                </table>
                <p style="text-align: left"> 
						<h3 style="text-align: left">Terms and Conditions:</h3>
                                                      <?php 
                                                      
                   foreach ($roomData->result() AS $roomData3) {}?>
						<ul style="text-align: left; padding-left: 20px !important">
							<?php echo $roomData3->TERMS_AND_CONDITIONS?>
						</ul>
				</p>

                                <a href="<?php echo base_url('Contact')?>" class="button"><span data-hover="Book a Room">Book a Room</span></a>
            </div>
            
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