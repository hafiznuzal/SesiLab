<html lang="en">
<head>
	<title>Tambah Pemilih</title>
		  <meta http-equiv="Content-Type" content="text/html; charset=US-ASCII">
		  <meta name="viewport" content="width=device-width">
		  <link rel="stylesheet" href="<?php echo base_url();?>static/assets/bootstrap/css/bootstrap.min.css">
		  <script src="<?php echo base_url();?>static/assets/bootstrap/js/jquery.min.js" type="text/javascript"></script>
		  <script src="<?php echo base_url();?>static/assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
		
	<?php
            
           if(isset($stat) && $stat =="ok")
           {
            echo "<div class='alert alert-dismissable alert-success'>
            <button type='button' class='close' data-dismiss='alert'>&times;</button>
            <b>Berhasil!</b> Data Telah Dimasukkan...
            </div>";
           }
           else if(isset($stat) && $stat =="gagal")
       {
            echo "<div class='alert alert-dismissable alert-danger'>
            <button type='button' class='close' data-dismiss='alert'>&times;</button>
            <b>Gagal!</b> Data Gagal Dimasukkan...
            </div>";
      }
           
    ?>

	<script>
  		$(document).ready(function() {
    	$("#datepicker").datepicker();
  		});
  	</script>

</head>
<html>
  
  <head>
    <title>.::Tambah Pemilih::.</title>
    <meta http-equiv="Content-Type" content="text/html; charset=US-ASCII">
  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" href="<?php echo base_url();?>static/assets/bootstrap/css/bootstrap.min.css">
  <script src="<?php echo base_url();?>static/assets/bootstrap/js/jquery.min.js" type="text/javascript"></script>
  <script src="<?php echo base_url();?>static/assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
  </head>
  
  <body>
  <form method="POST" action=<?php echo site_url("addpemilih/add"); ?>>
    <div class="container">
      <div class="row" style="padding-top:100px;">
        <div class="col-md-6 col-md-offset-3">
          <center>
            <h2><span class="label label-default">Tambah Pemilih</span></h2>
          </center>
          <div class="form-group">
            <label class="control-label">Nomor KTP</label>
            <div class="controls">
              <input type="text" class="form-control" name="NO_KTP">
              
            </div>
            <div class="pull-right">
                <input class="btn btn-success" type="submit" value="Submit" name="sub"/>
            </div>
          </div>
          </div>
      </div>
    </div>
	</form>
  </body>

</html>