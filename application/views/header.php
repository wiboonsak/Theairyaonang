<div id="nav">
    <div class="centre">
        <a href="<?php echo base_url('Welcome')?>" class="logo"><img alt="" src="<?php echo base_url('images/logo.png')?>" /></a>
        <nav>
            <ul>
            	<li class="mobile"><a href="<?php echo base_url('contact')?>" class="navbook">Book Online</a></li>
                <li><a href="<?php echo base_url('Welcome')?>">Home</a></li>
                <li><a href="<?php echo base_url('Accommodation')?>">Accommodation</a>
                	<ul>
                            <?php 
                                                                                     $roomID = '';
                                                                                    foreach($getroomdata->result() AS $getroomdata2){ ?> <?php if($roomID !=$getroomdata2->room_type_en){?>
                        <li><a href="<?php echo base_url('Accommodation/room/').$getroomdata2->id?>"><?php echo $getroomdata2->room_type_en?></a></li> <?php }?>
                                                                                        <?php $roomID=$getroomdata2->room_type_en ;}?>
                    </ul>
                </li>
                <li><a href="<?php echo base_url('Roomrate')?>">Room Rate</a></li>
                <li><a href="<?php echo base_url('Facility')?>">Facilities & Services</a></li>
                <li><a href="<?php echo base_url('Gettingthere')?>">Getting There</a></li>
                <li><a href="<?php echo base_url('Gallery')?>">Gallery</a>
                <ul>
                            <?php 
                                                                                     $galleryID = '';
                                                                                    foreach($getgallerydata->result() AS $getgallerydata2){ ?> <?php if($galleryID !=$getgallerydata2->name_en){?>
                        <li><a href="<?php echo base_url('Gallery/gallery/').$getgallerydata2->id?>"><?php echo $getgallerydata2->name_en?></a></li> <?php }?>
                                                                                        <?php $galleryID=$getgallerydata2->name_en ;}?>
                    </ul>
                </li>
                <li><a href="<?php echo base_url('Contact')?>">Contact Us</a></li>                
            </ul>
            <a id="pull"><i class="fa fa-bars"></i></a>
        </nav>
        <!-- Languages | START 
        <div id="language">
        	<ul>
            	<li class="en"><a>EN</a></li>
                <li class="cn"><a href="#">CN</a></li>
                <li class="fr"><a href="#">FR</a></li>
                <li class="de"><a href="#">DE</a></li>
                <li class="it"><a href="#">IT</a></li>
            </ul>
        </div>
        <!-- Languages | END -->
        <a href="https://www.booking.com/hotel/th/theairyaonang.th.html?label=gen173nr-1FCAso3QFCDXRoZWFpcnlhb25hbmdIJlgEaN0BiAEBmAEmuAEYyAEM2AEB6AEB-AEDiAIBqAIE;sid=77f7e0c192426cac6adcf229df1577e6;dist=0&keep_landing=1&sb_price_type=total&type=total&" class="book" target="_blank"><span data-hover="Book Online">Book Online</span> <i class="fa fa-check-circle"></i></a>
        <div class="shadow"></div>
    </div>
</div>
