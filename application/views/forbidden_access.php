<html>
	<head>
		<title>Undip Events</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">      
  </head>
	<body>
		<?php
			if($this->session->userdata('level')==1){
				$url = site_url('eo/index');
			}else{
				$url = site_url('sponsor/index');
			}
		?>
		<center>
			<h1>Forbidden Access, Anda tidak dapat masuk ke halaman ini, <a href="<?php echo $url;?>">kembali</a>.</h1>
		</center>
	</body>
	
</html>