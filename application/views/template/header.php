<html>
    <head>
        <title>Undip Event</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <!--<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap-3.3.2-dist/css/bootstrap.css" type="text/css" media="screen" />-->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/home.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/ue.css" type="text/css" media="screen" />
        <link href="<?php echo base_url(); ?>assets/css/movingboxes.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/css/demomovingbox.css" rel="stylesheet">
        <script src="<?php echo base_url(); ?>assets/bootstrap/js/jquery-1.11.2.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.js"></script>  
	<script src="<?php echo base_url(); ?>assets/js/jquery.movingboxes.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/demomovingbox.js"></script>
    </head>
    <body>
        <div id="header">
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
                            if(isset($status)){
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
                            }?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
