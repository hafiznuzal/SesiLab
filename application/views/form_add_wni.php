<!DOCTYPE HTML>

<html lang="en">
<head>
	<title>Tambahkan data WNI</title>
		<link href="<?php echo base_url();?>static/css/jquery-ui.css" rel="stylesheet" type="text/css"/>
  		<script type="text/javascript" src="<?php echo base_url(); ?>static/js/jquery.min.js"></script>
  		<script src="<?php echo base_url();?>static/js/jquery-ui.min.js"></script>
		
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>static/css/style.css"; >
		
		<style type="text/css">
		input:invalid {
			  border: 1px solid red;
		}

		input:valid {
			  border: 1px solid green;
		}
	</style>

	<style type="text/css">
	.button {
		-moz-box-shadow:inset 0px 1px 0px 0px #ffffff;
		-webkit-box-shadow:inset 0px 1px 0px 0px #ffffff;
		box-shadow:inset 0px 1px 0px 0px #ffffff;
		background-color:#f9f9f9;
		-webkit-border-top-left-radius:0px;
		-moz-border-radius-topleft:0px;
		border-top-left-radius:0px;
		-webkit-border-top-right-radius:0px;
		-moz-border-radius-topright:0px;
		border-top-right-radius:0px;
		-webkit-border-bottom-right-radius:0px;
		-moz-border-radius-bottomright:0px;
		border-bottom-right-radius:0px;
		-webkit-border-bottom-left-radius:0px;
		-moz-border-radius-bottomleft:0px;
		border-bottom-left-radius:0px;
		text-indent:0;
		border:1px solid #dcdcdc;
		display:inline-block;
		color:#666666;
		font-family:Arial;
		font-size:15px;
		font-weight:bold;
		font-style:normal;
		height:48px;
		line-height:48px;
		width:92px;
		text-decoration:none;
		text-align:center;
		text-shadow:1px 1px 0px #ffffff;
		}.button:hover {
		background-color:#e9e9e9;
		}.button:active {
		position:relative;
		top:1px;
	}</style>


	<script>
  		$(document).ready(function() {
    	$("#datepicker").datepicker();
  		});
  	</script>

</head>
<body>
	<form id="login" method="POST" action=<?php echo site_url("addwni/save"); ?>>
		<h1>Tambahkan WNI</h1>
		<fieldset id="inputs">
			<input class="username" placeholder="No KTP" type="text" name="ktp" required autofocus >
			<input class="username" placeholder="Nama" type="text" name="name" required autofocus >
		</fieldset>
		<fieldset id="inputs">	
			<input id="datepicker" class="username"placeholder="Tanggal Lahir" type="date" name="tgl_lahir" required autofocus >
			<input class="username" type="text" name="alamat" placeholder="Alamat" required autofocus >
		</fieldset>

		<fieldset id="actions">	
			<input class="button" type="submit" name="Submit" value="Submit">
		</fieldset>		
	</form>
</body>
</html>