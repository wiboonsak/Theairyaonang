    
    <!-- Sitewide Extras | START -->
    <div id="extras">
    	<div class="centre">
            <!-- List Items (Specials Slider) | START -->
            <div id="specials" class="list">
                <div class="back">
                    <div class="slider">
                    	<div class="item">
                        	<img alt="" src="<?php echo base_url('images/railay.jpg')?>" width="1200" height="400" />
                            <div class="details">
                                <a href="#">
                                    <div class="title">THE AIRY AONANG<br />
                                    <span>Activity Package, Railay Bay, KRABI</span></div>
                                    <p>The heaven of rock climber nested near Krabi Town but can access by longtail boats from Krabi and Ao Nang only. This small peninsula is tight bear hug from towering cliffs made it separate from ... side world, no road, no car and ...<br />
                                    <!--<strong>Stay from $249 per night</strong>--></p>
                                    <div class="button"><span data-hover="View Special">View Special</span></div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="nav"></div>
            </div>            
        </div>
    </div>
    <!-- Sitewide Extras | END -->
    <!-- Footer | START -->
    <footer>
    	<div id="footer">
        	<div class="centre">
                <!-- Subscribe / Social | START -->
                <div class="news">
                	<div class="title"><span>News & Offers</span></div>
                    <div class="subscribe">
                        <form>
                            <input  name="sub" id="sub" type="text" placeholder="Your email address" onChange="checkEmail(this.value)"/>
                            <button><span data-hover="Sign Up" onclick="Add()">Sign Up</span></button>
                        </form>
                    </div>
                    <div class="social">
                    	<a href="#" title="Facebook"><i class="fa fa-facebook"></i></a>
                        <a href="#" title="Twitter"><i class="fa fa-twitter"></i></a>
                        <a href="#" title="Google+"><i class="fa fa-google-plus"></i></a>
                        <a href="#" title="Pinterest"><i class="fa fa-pinterest-p"></i></a>
                    </div>
                </div>
                <!-- Subscribe / Social | END -->
            	<!-- Contact Details | START -->
            	<div class="contact">
                	<p><strong class="phone">+66 (0) 75 817 644<br>+66 (0) 95 039 7644</strong><br />
                    <a href="mailto:rsvn@theairyaonang.com">rsvn@theairyaonang.com</a><br /><br />
                    <i class="fa fa-map-marker"></i> 111 M.2  T.Aonang,<br />
                     Ao Nang, Krabi, Thailand 81180.<br />
                    <a href="https://goo.gl/maps/KrHyztuMREu" target="_blank"><strong>Get Directions</strong></a></p>
                </div>
                <!-- Contact Details | END -->
                <div class="dark"></div>
            </div>
        </div>
    	<!-- Footer Links | START -->
    	<div id="footerlinks">
        	<div class="centre">
            	<span>Copyright &copy; <script>var d = new Date(); document.write(d.getFullYear());</script> <strong>The Airy Aonang</strong></span>Developed by <a href="http://www.me-fi.com" target="_blank">ME-Fi dot com</a></span>
            </div>
        </div>
        <!-- Footer Links | END -->
    </footer>
    <!-- Footer | END -->
     <script type="text/javascript">
                function Add(){
                    var sub = $('#sub').val();
                    if(sub!=''){
                    $.post('<?php echo base_url('Welcome/subsribe')?>', { sub : sub }, function(data){  
			if(data == '1'){
                            alert('Thank you for subscribe');
                            $('#sub').val('');
                            $('#sub').focus();
                        }
                                    });
                                 
                                }else{
                                   return false; 
                                }
                
            }
             //-----------------------------
        function checkEmail(email){
			$.post('<?php echo base_url('Welcome/checkemail')?>',{ email:email }, function(data){
			if(data >0){
				alert('This email is already a mamber.');
                                $('#sub').val('');
                                $('#sub').focus();
                                return false;
				} ;
			});
		
                    }
                </script>