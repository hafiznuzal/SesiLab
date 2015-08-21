<html>
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

<div id= "wrapper">
	 <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Tambah Asisten
                        </h1>
                        
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">

                        <form role="form">

                            <div class="form-group">
                                <label>NRP</label>
                                <input class="form-control" placeholder="51XX100XXX">
                            </div>
                            
                            <div class="form-group">
                                <label>Nama</label>
                                <input class="form-control" placeholder="Bambang Pamungkas">
                            </div>
                            
                            <div class="form-group">
                                <label>Mata Kuliah</label>
                                <select class="form-control">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Kelas</label>
                                <select class="form-control">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>


                            

                            
                            <button type="submit" class="btn btn-success">Tambahkan</button>
                            <button type="reset" class="btn btn-danger">Cancel</button>

                        </form>

                    </div>
                   
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
</div>
</body>
</html>