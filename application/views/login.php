<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Dashio - Bootstrap Admin Template</title>
<!-- Favicons -->

  <link href="<?php echo base_url('assets/img/favicon.png')?>"rel="icon">
  <link href="<?php echo base_url('assets/img/apple-touch-icon.png')?>" rel="apple-touch-icon">
  <link href="<?php echo base_url('assets/lib/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/lib/font-awesome/css/font-awesome.css') ?>" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url('assets/css/style.css" rel="stylesheet') ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/css/style-responsive.css') ?>" rel="stylesheet">

  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>
<body>
  <div id="login-page">
    <div class="container">
      <form class="form-login" action="<?php echo base_url('/index.php/admin/halaman_admin')?>">
        <h2 class="form-login-heading">Login</h2>
        <div class="login-wrap">
          <input type="text" class="form-control" placeholder="User ID" autofocus>
          <br>
          <input type="password" class="form-control" placeholder="Password">
          <label class="checkbox">
            <span class="pull-right">
            </span>
            </label>
           <button class="btn btn-theme btn-block" type="submit"><i class="fa fa-lock"></i> Masuk</button>
          <hr>
          <div class="login-social-link centered">
            <p>Silahkan Login</p>
        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              </div>
      </form>
    </div>
  </div>
 


  <script src="<?php echo base_url('assets/lib/jquery/jquery.min.js')?>"></script>
  <script src="<?php echo base_url('assets/lib/bootstrap/js/bootstrap.min.js')?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/lib/jquery.backstretch.min.js')?>"></script>
  <script>
    $.backstretch("<?php echo base_url('assets/img/login-bg.jpg')?>", {
      speed: 500
    });
  </script>
</body>

</html>