<!DOCTYPE HTML>
<!-- Base Hotel: HTML Template by Klaye Morrison (http://klayemorrison.com) -->
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>The Airy Aonang, Krabi Thailand</title>
        <link rel="stylesheet" href="<?php echo base_url('css/global.css') ?>">
        <link class="colour" rel="stylesheet" href="<?php echo base_url('css/colour-blue.css') ?>">
        <link class="pattern" rel="stylesheet" href="<?php echo base_url('css/pattern-pentagon.css') ?>">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    </head>
    <body>
        <!-- Navigation | START -->
        <?php include("header.php"); ?>
        <!-- Navigation | END -->
        <div id="container">
            <!-- Header | Start -->
            <header>
                <div id="header">
                    <div class="h1">
                        <h1><span>Photo Gallery</span>
                            <span class="tagline">Experience a day at Base Hotel</span></h1>
                    </div>
                </div>
                <!-- Check Rates Banner | START -->
                <div id="check">
                    <div class="centre">
                        <form action="<?php echo base_url('Contact') ?>" method="post">
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
            <main id="gallerycontainer">
                <div id="gallery">
                    <?php
                    $n = 1;
                    $c = '';
                    foreach ($imagesList->result() AS $imagesList2) {
                        if ($n == 5) {$n = 1;}
                        if ($n == 1) { $c = 'item-w2 item-h2';
                        } else {$c = '';}?>
                        <!-- Feature --><figure class="<?php echo $c; ?>">
                            <a href="<?php echo base_url('uploadfile/gallery/') . $imagesList2->image_name ?>">
                                <span><h3><?php echo $imagesList2->name_en ?></h3></span>
                                <img alt="" data-original="<?php echo base_url('uploadfile/gallery/') . $imagesList2->image_name ?>" width="900" height="600" src="<?php echo base_url('images/blank.png') ?>" />
                            </a>
                        </figure>
    <?php $n++;$c = '';} ?>

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
        <script src="<?php echo base_url('js/plugins.js') ?>"></script>
        <script src="<?php echo base_url('js/global.js') ?>"></script>
    </body>
</html>