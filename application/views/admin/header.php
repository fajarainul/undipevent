<html>
	<head>
		<title>Undip Event</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<!--<link rel="stylesheet" href="<?php echo base_url();?>assets/bootstrap-3.3.2-dist/css/bootstrap.css" type="text/css" media="screen" />-->
		<link rel="stylesheet" href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/admin/css/style.css" type="text/css" media="screen" />
		<script src="<?php echo base_url();?>assets/bootstrap/js/jquery-1.11.2.min.js"></script>
		<script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.js"></script>  
		
		<script>
		$(function(){
			$('.user').on('mouseover', function(){
				$('.user .second-level').show();
			}).on('mouseout', function(){
				$('.user .second-level').hide();
			});
		});
		
		</script>
		<style type="text/css">
			.user-menu .second-level li a{
				padding-left: 15%;
			}
			.user-menu .second-level li a:hover{
				background-color: white;
				color: #333333;
			}
			#view-event .row{
				padding-left: 15px;
				padding-right: 15px;
			}
			#view-event .image{
				height: 200px;
				background:white;
			}
			#view-event .detail{
				padding-top: 10px;
				padding-bottom: 10px;
			}
			
		</style>
	</head>
	<body>
		<div class="container-fluid">
			<div id="header" class="row">
				<div id="navbar" class="col-md-12">
					<nav class="navbar navbar-default">
						<div class="container-fluid">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header">
								<a class="navbar-brand" href="#">UndipEvent</a>
							</div>

							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
								<ul class="nav navbar-nav navbar-right">
									<li><a href="#">Hi, Username</a></li>
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Logout<span class="caret"></span></a>
										<ul class="dropdown-menu" role="menu">
											<li><a href="#">Logout</a></li>
										</ul>
									</li>
								</ul>
							</div><!-- /.navbar-collapse -->
						</div><!-- /.container-fluid -->
					</nav>
				</div>
			</div><!-- /end of header -->
			<div id="content" class="row">
				<div id="content_left" class="col-md-2">
					<div id="menu_left">
						<ul class="nav nav-stacked">
							<li role="presentation"><a href="#">All Posts</a></li>
							<li role="presentation"><a href="#">Categories</a></li>
							<li role="presentation"><a href="#">Slider</a></li>
							<li id="user-menu" role="presentation"><a href="#">User</a>
								<ul class="nav second-level" style="display:none">
	                                <li> <a href=""> All User </a> </li>
	                                <li> <a href=""> Add User </a> </li>
	                            </ul>
							</li>
						</ul>
					</div>
				</div>
				<div id="content_right" class="col-md-10">