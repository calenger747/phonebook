<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Phone Book | Login Page</title>

    <link href="<?php echo base_url();?>vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url();?>vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url();?>vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="<?php echo base_url();?>vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url();?>build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>  
      <center><img src="<?php echo base_url();?>images/lrlogo.png" width="25%" height="50%" style="margin-top: 40px; margin-bottom: -50px;">
      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form role="login" name="login" method="post" action="<?php echo base_url('login/proses'); ?>">
              <h1>Login Form</h1>
              <br />
              <div class="col-md-12">
                  <?php
                  if($this->session->flashdata('pesan') != ''){
                      echo '
                          <div class="alert alert-dismissable alert-danger">
                            <button type="button" class="close" data-dismiss="alert">x</button>
                            '.$this->session->flashdata('pesan').'
                          </div>
                      ';
                  }
                  ?>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="username" placeholder="Username" required="" />
              </div>
              <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Password" required="" />
                <input name="id_role" type="hidden" value="1" />
              </div>
              <div class="form-action">
                <button type="submit" name="login" class="btn btn-default submit"> Log in </span></button>
              </div>
            </form>

              <div class="clearfix"></div>

              <div class="separator">
                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-pencil-square-o"></i>&nbsp Phone Book Aplication</h1>
                  <p>©2018 All Rights Reserved. PT. Lumbung Riang Communcation</p>
                </div>
              </div>
          </section>
        </div>
      </div>
    </div>
  </body>
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
</html>