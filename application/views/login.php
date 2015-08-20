<<html>
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Bootstrap Admin Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css')?>" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url('assets/css/sb-admin.css')?>" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?php echo base_url('assets/css/plugins/morris.css')?>" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url('assets/font-awesome/css/font-awesome.min.css')?>" rel="stylesheet" type="text/css">

    <!-- jQuery -->
    <script src="<?php echo base_url('assets/js/jquery.js')?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/plugins/morris/morris.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/plugins/morris/raphael.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/plugins/morris/morris-data.js')?>"></script>
  <title></title>
</head>
<body>

<!-- <div class="container-fluid">
  <div class="col-lg-6">

           <form class="form-signin"id="formlogin" method="POST" action="<?php echo site_url();?>/c_verifylogin">
        <h2 class="form-signin-heading" style="text-align:center;">Silahkan Login </h2>
        <label for="inputEmail" class="sr-only">Username</label>
        <input type="text" name="username"id="inputEmail" class="form-control" placeholder="Username" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <input type="hidden" id="tahunLg" name="tahunLg">
        <input type="hidden" id="periodeLg" name="periodeLg">
        <!-- <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" id="submitLogin"type="submit">Log in</button>
      </form>
  </div>
</div> --> -->


  <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
               
                <div class="row">
                  <div class="col-md-3"></div>
                    <div class="col-md-6">

                        <form role="form">
                          <img style="margin-top:10px;margin-right:auto; margin-left:auto; display:block;"  src="<?php  echo site_url()?>assets/img/sidoarjo.png">
                            <h2 class="form-signin-heading" style="text-align:center;">Silahkan Login </h2>
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" name="username"id="inputEmail" class="form-control" placeholder="Username" required autofocus>
                                <p class="help-block">Example block-level help text here.</p>
                            </div>

                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
                            </div>


 
 

                            <button type="submit" class="btn btn-success">Submit Button</button>
                            <button type="reset" class="btn btn-default">Reset Button</button>

                        </form>

                    </div>
                    <div class="col-md-3">  </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>

            <!-- /.container-fluid -->
</body>
</html>
   