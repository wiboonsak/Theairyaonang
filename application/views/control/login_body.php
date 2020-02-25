
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta charset="utf-8">

        <title>Admin[THEAIRYAONANG.COM]</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<link rel="stylesheet" href="<?php echo base_url('assets/font-awesome/4.5.0/css/font-awesome.min.css')?>" />

		<!-- text fonts -->
		<link rel="stylesheet" href="<?php echo base_url('assets/css/fonts.googleapis.com.css')?>" />

		<!-- ace styles -->
		<link rel="stylesheet" href="<?php echo base_url('assets/css/ace.min.css')?>" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" />
		<![endif]-->
		<link rel="stylesheet" href="<?php echo base_url('assets/css/ace-rtl.min.css')?>" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="<?php echo base_url('asset/control/assets/images/favicon.ico') ?>">

        <!-- App css -->
        <link href="<?php echo base_url('asset/control/assets/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('asset/control/assets/css/icons.css" rel="stylesheet') ?>" type="text/css" />
        <link href="<?php echo base_url('asset/control/assets/css/style.css" rel="stylesheet') ?>" type="text/css" />

        <script src="<?php echo base_url('asset/control/assets/js/modernizr.min.js') ?>"></script>

    </head>

    <body>
        

<body class="login-layout">
		<div class="main-container">
			<div class="main-content">
				<div class="row">
				
                                    <div class="login-container-fluid" style="display: block; margin: auto;">
							<div class="center">
								<h1>
									
									<span class="white" id="id-text2">THEAIRYAONANG.COM</span>
									
								</h1>
								<h4 class="blue" id="id-company-text">&copy; Control Management System</h4>
							</div>
                                        <div class="card-box p-5" >
                           
                            <?php if ($Error == '1') { ?>
                                            <h4 align="center" class="text-danger"><i class=" mdi mdi-alert-octagon"></i>
username or passwords are invalid</h4>
                            <?php } ?>
                                <h4 class="header blue lighter bigger">
												<i class="fa fa-user-circle" ></i> Login </h4>
                                                                                             
                            <form class="" method="post" action="<?php echo base_url('login/gologin') ?>">

                                <div class="form-group m-b-20 row">
                                    <div class="col-12">
                                        <label for="emailaddress">Username</label>
                                        <input class="form-control" type="text" id="Username" name="Username" required="" placeholder="Enter your Username">
                                    </div>
                                </div>

                                <div class="form-group row m-b-20">
                                    <div class="col-12">

                                        <label for="password">Password</label>
                                        <input class="form-control" type="password" required="" id="password" name="password" placeholder="Enter your password">
                                    </div>
                                </div>



                                <div class="form-group row text-center m-t-10">
                                    <div class="col-12">
                                        <button class="btn btn-block btn-custom waves-effect waves-light" type="submit">Login</button>
                                    </div>
                                </div>

                            </form>

                            <div class="row m-t-50"></div>

                        </div>
                    </div>

                </div>
            </div>
                    </div>

            
            </div>

            <div class="m-t-40 text-center">
                <p class="account-copyright">2018 © Highdmin. - Coderthemes.com</p>
            </div>

        </div>


        <!-- jQuery  -->
        <script src="<?php echo base_url('asset/control/assets/js/jquery.min.js') ?>"></script>
        <script src="<?php echo base_url('asset/control/assets/js/popper.min.js') ?>"></script>
        <script src="<?php echo base_url('asset/control/assets/js/bootstrap.min.js') ?>"></script>
        <script src="<?php echo base_url('asset/control/assets/js/waves.js') ?>"></script>
        <script src="<?php echo base_url('asset/control/assets/js/jquery.slimscroll.js') ?>"></script>

        <!-- App js -->
        <script src="<?php echo base_url('asset/control/assets/js/jquery.core.js') ?>"></script>
        <script src="<?php echo base_url('asset/control/assets/js/jquery.app.js') ?>"></script>

    </body>
</html>