<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Halaman Publikasi Tugas Akhir Mahasiswa</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/form-elements.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/img/bg-classroom.jpg">

        <link rel="shortcut icon" href="<?php echo base_url();?>assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url();?>assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url();?>assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url();?>assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="<?php echo base_url();?>assets/ico/apple-touch-icon-57-precomposed.png">


    </head>

    <body> `
        <!-- Top content -->
        <div class="top-content">
            
            <div class="inner-bg">
                <div class="container">
                    
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                           <strong><h1 style="color: #07294E;">Publikasikan Tugas Akhir Kamu di Sini !!!</h1></strong> 
                        </div>
                    </div>
                    
                    <div class="row" >
                        <div class="col-sm-5">
                            
                            <div class="form-box">
                                <div class="form-top" style="background-color: #07294E; color: #ffc600;">
                                    <div class="form-top-left">
                                        <h3 style="color: #ffc600">Sign up now</h3>
                                        <p>Fill in the form below to get instant access:</p>
                                    </div>
                                    <div class="form-top-right">
                                        <i class="fa fa-pencil"></i>
                                    </div>
                                </div>
                            <?= form_open_multipart('index.php/cLogin/tambah_user') ?>
                            <div>
                                
                            </div>

                                <div class="form-bottom" style="outline-color:#07294E; ">
                                    <?= $this->session->flashdata('msg') ?>
                                    <form role="form" action="" method="post" class="registration-form">
                                        <div class="form-group">
                                            <label class="sr-only" for="form-nim">NIM</label>
                                            <input type="text" name="username" placeholder="NIM.." class="form-nim form-control" id="form-nim" >
                                        </div>
                                        <div class="form-group">
                                            <label class="sr-only" for="form-password">Password</label>
                                            <input type="password" name="password" placeholder="Password..." class="form-password form-control" id="form-password" >
                                        </div>
                                        <input name="signin" type="submit" class="btn btn-primary btn-lg btn-block" value="Register" style="background-color: #ffc600; color: #07294E;">
                            <?= form_close() ?>
                                </div>
                            </div>
                            
                        </div>
                        
                        <div class="col-sm-1 middle-border"></div>
                        <div class="col-sm-1"></div>
                            
                          <div class="col-sm-5">
                            <div class="form-box">
                                <div class="form-top" style="background-color: #07294E; color: #ffc600;">
                                    <div class="form-top-left">
                                        <h3 style="color: #ffc600">Login to our site</h3>
                                        <p>Enter username and password to log on:</p>
                                    </div>
                                    <div class="form-top-right">
                                        <i class="fa fa-key"></i>
                                    </div>
                                </div>
                                <div class="form-bottom">
                                <?= form_open_multipart('index.php/cLogin/aksi_login') ?>
                                    <div>
                                        <?= $this->session->flashdata('msg') ?>
                                        
                                    </div>
                                        <div class="form-group">
                                            <label class="sr-only" for="form-nim">NIM</label>
                                            <input type="text" name="username" placeholder="NIM..." class="form-nim form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label class="sr-only" for="form-password">Password</label>
                                            <input type="password" name="password" placeholder="Password..." class="form-password form-control" required>
                                        </div>
                                        <div class="form-group">
                                        <input name="login-signin" type="submit" class="btn btn-primary btn-lg btn-block" value="Login" style="background-color: #ffc600; color: #07294E;">
                                    <?= form_close() ?>
                                </div>
                            </div>
                        
                            
                        </div>
                    </div>
                    
                </div>
            </div>
            
        </div>

        <!-- Footer -->
        <footer>
            <div class="container">
                <div class="row">
                    
                    <div class="col-sm-8 col-sm-offset-2">
                        <div class="footer-border"></div>
                        <p style="color: #07294E;"  >Copyright &reg; 2018<i class="fa fa-smile-o"></i></p>
                    </div>
                    
                </div>
            </div>
        </footer>

        <!-- Javascript -->
        <script src="<?php echo base_url();?>assets/js/jquery-1.11.1.min.js"></script>
        <script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>