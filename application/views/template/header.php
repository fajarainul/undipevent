<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Undip Events</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <!--<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap-3.3.2-dist/css/bootstrap.css" type="text/css" media="screen" />-->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/home.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css" type="text/css" media="screen" />
<!--        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/ue.css" type="text/css" media="screen" />-->
        <link href="<?php echo base_url(); ?>assets/css/movingboxes.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/css/demomovingbox.css" rel="stylesheet">
        <script src="<?php echo base_url(); ?>assets/bootstrap/js/jquery-1.11.2.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.js"></script>  
	<script src="<?php echo base_url(); ?>assets/js/jquery.movingboxes.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/demomovingbox.js"></script>
    </head>
    <body>
        <header>
            <div id="login-bar">
                <div class="container">
                    <div id="login-btn">
                        <a href="#"> Login </a>
                    </div>
                </div>
            </div>
            <div id="menu-bar">
                <div class="container">
                    <!-- Logo -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <!-- Logo Brand-->
                        <a id="logo" href="<?php echo base_url(); ?>index.php/website/index"><img src="<?php echo base_url()?>assets/images/logo.png"/></a>
                    </div>
                    <!-- Menu -->
                    <div id="navbar" class=""><!--collapse-->
                        <ul class="nav navbar-nav">
                            <li><a href="<?php echo base_url(); ?>index.php/website/index"> Home </a></li>
                            <li><a href="<?php echo base_url(); ?>index.php/website/eo"> Event Organizer </a></li>
                            <li><a href="<?php echo base_url(); ?>index.php/website/sponsor"> Sponsor </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        
        
        
        <!--<div id="header">
            <div id="up_header">
                <div class="row">
                    <button style="float:right"type="button" class="home_login_btn btn">LOGIN</button>
                </div>
            </div>
            <div id="main_header">
                <div class="row">
                    <div class="logo">
                        <img src="<?php echo base_url()?>assets/images/logo.png">
                    </div>
                    <div id="menu">
                        <ul class="nav nav-pills">
                            <?php
                            /*if(isset($status)){
                                if($status==1){
                                    echo"
                                    <li style='color:orange' id='menu_active'><a href='".base_url()."index.php/website/index'>Home</a></li>
                                    <li><a href='".base_url()."index.php/website/eo'>Event Organizer</a></li>
                                    <li><a href='".base_url()."index.php/website/sponsor'>Sponsor</a></li>";
                                }
                                else if($status==2){
                                    echo"
                                    <li ><a href='".base_url()."index.php/website/index'>Home</a></li>
                                    <li style='color:orange' id='menu_active'><a href='".base_url()."index.php/website/eo'>Event Organizer</a></li>
                                    <li><a href='".base_url()."index.php/website/sponsor'>Sponsor</a></li>";
                                }
                                else if($status==3){
                                    echo"
                                    <li><a href='".base_url()."index.php/website/index'>Home</a></li>
                                    <li ><a  href='".base_url()."index.php/website/eo'>Event Organizer</a></li>
                                    <li style='color:orange' id='menu_active'><a href='".base_url()."index.php/website/sponsor'>Sponsor</a></li>";
                                }
                            }*/?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
-->