<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Admin[THEAIRYAONANG.COM]</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="<?php echo base_url('asset/control/assets/images/favicon.ico') ?>">
        <!-- Custom box css -->
        <link href="<?php echo base_url('asset/control/plugins/custombox/css/custombox.min.css') ?>" rel="stylesheet">
        <!-- Sweet Alert css -->
        <link href="<?php echo base_url('asset/control/plugins/switchery/switchery.min.css') ?>" rel="stylesheet" />
        <script src="<?php echo base_url('asset/control/assets/js/modernizr.min.js') ?>"></script>
        <!-- Toastr css -->
        <link href="<?php echo base_url('asset/control/plugins/jquery-toastr/jquery.toast.min.css') ?>" rel="stylesheet" />
        <!-- Summernote css -->
        <link href="<?php echo base_url('asset/control/plugins/summernote/summernote-bs4.css" rel="stylesheet') ?>"
             <!-- Sweet Alert css -->
              <link href="<?php echo base_url('asset/control/plugins/sweet-alert/sweetalert2.min.css') ?>" rel="stylesheet" type="text/css" />
        <!-- App css -->
        <link href="<?php echo base_url('asset/control/assets/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('asset/control/assets/css/icons.css') ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('asset/control/assets/css/style.css') ?>" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <!-- Navigation Bar-->
        <header id="topnav">
            <div class="topbar-main">
                <div class="container-fluid">
                    <!-- Logo container-->
                    <div class="logo">
                        <a  class="logo">
                            <img src="<?php echo base_url('asset/www/images/logo.png') ?>" alt="" height="50" class="logo-small">
                            <img src="<?php echo base_url('asset/www/images/logo.png') ?>" alt="" height="50" class="logo-large">&nbsp;&nbsp;&nbsp;<a>The Airy Aonang</a>
                        </a>
                    </div>
                    <!-- End Logo container-->
                    <div class="menu-extras topbar-custom">
                        <ul class="list-unstyled topbar-right-menu float-right mb-0">
                            <li class="menu-item">
                                <!-- Mobile menu toggle-->
                                <a class="navbar-toggle nav-link">
                                    <div class="lines">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </a>
                                <!-- End mobile menu toggle-->
                            </li>
                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle waves-effect nav-user" data-toggle="dropdown" href="#" role="button"
                                   aria-haspopup="false" aria-expanded="false">
                                    <img src="<?php echo base_url('assets/images/avatars/avatar2.png') ?>" alt="Jason's Photo"  class="rounded-circle"> <span class="ml-1 pro-user-name"><?php echo $this->session->userdata('name') ?><i class="mdi mdi-chevron-down"></i> </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                    <!-- item-->
                                    <div class="dropdown-item noti-title">
                                        <h6 class="text-overflow m-0">Welcome !</h6>
                                    </div>
                                    <!-- item-->
                                    <a href="javascript:void(0);" onClick="cangePassForm()" class="dropdown-item notify-item">
                                        <i class="fi-head"></i> <span>Change Password</span>
                                    </a>
                                   <!-- item-->
                                    <a href="<?php echo base_url('logout') ?>" class="dropdown-item notify-item">
                                        <i class="fi-power"></i> <span>Logout</span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- end menu-extras -->
                    <div class="clearfix"></div>
                </div> <!-- end container -->
            </div>
            <!-- end topbar-main -->
            <div class="navbar-custom" style="background-color: SteelBlue;">
                <div class="container-fluid">
                    <div id="navigation">
                        <ul class="navigation-menu">
                            <li class="has-submenu">
                                <a href="#"><i class="icon-layers"></i>ROOMS</a>
                                <ul class="submenu">
                                    <li><a href="<?php echo base_url('control/AddNewRoom') ?>">ADD NEW ROOM</a></li>
                                    <li><a href="<?php echo base_url('control/listRoom') ?>">MANAGE ROOM</a></li>
                                    <li><a href="<?php echo base_url('control/setseason') ?>">SET SEASON</a></li>
                                    <li><a href="<?php echo base_url('control/setfullrate') ?>">SET FULL RATE</a></li>
                                </ul>
                            </li>
                            <li class="has-submenu">
                                <a href="#"><i class="icon-layers"></i>SLIDE PHOTO</a>
                                <ul class="submenu">
                                    <li><a href="<?php echo base_url('control/slide_add') ?>">ADD NEW DATA</a></li>
                                    <li><a href="<?php echo base_url('control/slide_list') ?>">LIST ALL DATA</a></li>
                                </ul>
                            </li>
                            <li class="has-submenu" >
                                <a href="#"><i class="icon-layers"></i>GALLERY</a>
                                <ul class="submenu">
                                    <li><a href="<?php echo base_url('control/GalleryAdd') ?>">ADD NEW DATA</a></li>
                                    <li><a href="<?php echo base_url('control/GalleryList') ?>">LIST ALL DATA</a></li>
                                </ul>
                            </li>
                            <li class="has-submenu" >
                                <a href="#"><i class="icon-layers"></i>SUBSCRIBE</a>
                                <ul class="submenu">
                                    <li><a href="<?php echo base_url('control/listSubscribe') ?>">LIST ALL DATA</a></li>
                                </ul>
                            </li>
                        </ul>
                        <!-- End navigation menu -->
                    </div> <!-- end #navigation -->
                </div> <!-- end container -->
            </div> <!-- end navbar-custom -->
        </header>
        <!-- End Navigation Bar-->