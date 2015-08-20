<!DOCTYPE HTML>
<html>
<head>
	<title></title>
	<style type="text/css">

		input:invalid {
			  border: 1px solid red;
		}

		input:valid {
			  border: 1px solid green;
		}
	</style>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>static/css/style.css"; >
	<style type="text/css">

		body {
		    background-color: #d9dee2;
		    
		}
		select option {
		    background: #fff; /* style the dropdown bg color */
		}
	</style>
	<style type="text/css">
		.btn {
		  background: #d9dde0;
		  background-image: -webkit-linear-gradient(top, #d9dde0, #949494);
		  background-image: -moz-linear-gradient(top, #d9dde0, #949494);
		  background-image: -ms-linear-gradient(top, #d9dde0, #949494);
		  background-image: -o-linear-gradient(top, #d9dde0, #949494);
		  background-image: linear-gradient(to bottom, #d9dde0, #949494);
		  -webkit-border-radius: 28;
		  -moz-border-radius: 28;
		  border-radius: 28px;
		  text-shadow: 1px 1px 3px #666666;
		  font-family: Arial;
		  color: #ffffff;
		  font-size: 15px;
		  padding: 5px 10px 5px 10px;
		  text-decoration: none;
		}

		.btn:hover {
		  background: #3cb0fd;
		  background-image: -webkit-linear-gradient(top, #3cb0fd, #3498db);
		  background-image: -moz-linear-gradient(top, #3cb0fd, #3498db);
		  background-image: -ms-linear-gradient(top, #3cb0fd, #3498db);
		  background-image: -o-linear-gradient(top, #3cb0fd, #3498db);
		  background-image: linear-gradient(to bottom, #3cb0fd, #3498db);
		  text-decoration: none;
		}
	</style>
</head>
<body>
	<form id="login" method="POST" action="">
		<h1>Menghapus WNI</h1>
		<select name="no_ktp" required style="position:relative;left:50px;margin-left:auto;margin-right:auto;width:80%;">
			<option value="">Pilih No KTP </option>
			
			<?php 
				for ($i=0; $i <$jumlah ; $i++) {  
					echo "<option value=".$data[$i][0];
					if(isset($_POST['cek']) && $_POST['no_ktp']==$data[$i][0])echo " selected";
					echo ">".$data[$i][0]."</option>";
					
				}
			 ?>
		</select>
		<br />
		<button class="btn" style="margin-top:10px; margin-bottom:10px; position:relative;left:80%;margin-left:auto;margin-right:auto;" name="cek" value="Cek">Cek</button>
		<input class="btn"  type="submit" name="delete" value="Delete">
		
		<?php  
			if(isset($_POST['cek']))
			{
				echo "<fieldset id='inputs'>";
				for ($i=0; $i<$jumlah; $i++) { 
					for ($j=0; $j < $kolom; $j++) { 
						if($data[$i][0]==$_POST['no_ktp']){
							echo "<input class='username' type='text' value='".$data[$i][$j]."' disabled>";
						}
					}
				}
				echo "</fieldset>";
			}

		?>
	</form>
</body>
</html>

<?php 
	
	if(isset($_POST['delete']))
	{
		header('Location: '.site_url('addwni/delete')."/".$_POST['no_ktp']);
	}
 ?>