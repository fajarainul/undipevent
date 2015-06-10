<html>
    <head>
        <title>Halaman Login Undip Events</title>
        <link rel="stylesheet" href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.css" type="text/css" media="screen" />
    </head>
    <style type="text/css">
        .frame_login{
                padding: 5px 5px;
                box-shadow: 0px 0px 6px 6px white;
                width: 300px;
                height: 330px;
                margin-top: 10%;
                margin-left: auto;
                margin-right: auto;
                background: #3498DB;
                z-index: -1;
        }
        .header_login{
                float:left;
                margin:5px 5px 0px 5px;
                width:100%;
                background:#3498DB;
                text-align: center;
                padding:10px;
                color:white;
        }
        .main_login{
                float:left;
                clear:both;
                padding:20px;
                width:100%;
        }
        .footer_login{
                float:left;
                clear:both;
                margin:0px 5px 5px 5px;
                width:100%;
                min-height:50px;

        }
        .btn-ue{
                width: 100%;
                background:#3498DB;
                text-align: center;
                height: 50px;
                color: white;
                border: 2px #FFFFFF solid;
								border-radius:0px;
        }
        .btn-ue:hover{
            background:#337AB7;
        }
    </style>
    <body>
        <div class="frame_login">
            <div class="header_login">
                <img style="float:left; margin-right:20px;" src="" />
                <h2 style="margin-top:7px">Ue-Project</h2>
            </div>
            <div class="main_login">
                <form role="form" method="post" action="<?php echo site_url('login');?>">
                    <div class="form-group">
                        <input type="text" id="username" name="username"  class="form-control" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" id="password"  class="form-control" placeholder="Password">
                    </div>
                    <button type="submit" name="login" class="btn btn-ue">LOGIN</button>
                </form>
            </div>
            <div class="footer_login">
                <?php
                if (isset($error)) {
                    echo '<div class="alert alert-danger" role="alert"><strong>' . $error . '</strong></div>';
                }
                ?>
                <center><p style="color: white">&copy;&nbsp;Copyright Ue-Project</p></center>
            </div>
        </div>
    </body>
</html>