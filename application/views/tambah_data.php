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
  <link href="<?php echo base_url('assets/img/favicon.png')?>" rel="icon">
  <link href="<?php echo base_url('assets/img/apple-touch-icon.png')?>" rel="apple-touch-icon">



  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url('assets/lib/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">
  <!--external css-->
  <link href="<?php echo base_url('assets/lib/font-awesome/css/font-awesome.css')?>" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/lib/bootstrap-fileupload/bootstrap-fileupload.css')?>" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/lib/bootstrap-datepicker/css/datepicker.css')?>" />

  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/lib/bootstrap-daterangepicker/daterangepicker.css')?>" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/lib/bootstrap-timepicker/compiled/timepicker.css')?>" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/lib/bootstrap-datetimepicker/datertimepicker.css')?>" />
  <!-- Custom styles for this template -->
  <link href="<?php echo base_url('assets/css/style.css')?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/css/style-responsive.css')?>" rel="stylesheet">

  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="index.html" class="logo"><b>DASH<span>IO</span></b></a>
      <!--logo end-->
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="<?php echo base_url()?>">Logout</a></li>
        </ul>
      </div>
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="profile.html"><img src="<?php echo base_url('assets/img/ui-sam.jpg')?>" class="img-circle" width="80"></a></p>
          <h5 class="centered">Sam Soffes</h5>
          <li class="mt">
            <a class="active" href="<?php echo base_url('/index.php/admin/halaman_admin')?>">
              <i class="fa fa-dashboard"></i>
              <span>Dashboard</span>
              </a>
            <a class="sub-menu" href="<?php echo base_url('/index.php/tambah_data')?>">
              <i class="fa fa-dashboard"></i>
              <span>Tambah Data Penyakit</span>
              </a>
            <a class="sub-menu" href="<?php echo base_url('/index.php/read_data')?>">
              <i class="fa fa-dashboard"></i>
              <span>Data Penyakit</span>
              </a>
          </li>
          
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <h4><i class=""></i> Form Tambah Data Penyakit</h4>
        <div class="row mt">
          <!--  DATE PICKERS -->
          <div class="col-lg-12">
            <div class="form-panel">
              <form action="#" class="form-horizontal style-form">
        <!-- row -->
        <!--ADVANCED FILE INPUT-->
        <div class="row mt">
          <div class="col-lg-12">
            <div class="form-panel">
              <form action="#" class="form-horizontal style-form">
              <div class="form-group ">
                    <label for="cemail" class="control-label col-lg-2">Nama penyakit</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="cname" type="text" name="email" required  placeholder="Masukan nama penyakit" />
                    </div>
                  </div>
                   <div class="form-group ">
                    <label for="ccomment" class="control-label col-lg-2">Deskripsi</label>
                    <div class="col-lg-10">
                      <textarea class="form-control " id="ccomment" name="comment" required></textarea>
                    </div>
                  </div>
                   <div class="form-group ">
                    <label for="ccomment" class="control-label col-lg-2">Solusi pencegahan</label>
                    <div class="col-lg-10">
                      <textarea class="form-control " id="ccomment" name="comment" required></textarea>
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="ccomment" class="control-label col-lg-2">Solusi penanganan</label>
                    <div class="col-lg-10">
                      <textarea class="form-control " id="ccomment" name="comment" required></textarea>
                    </div>
                  </div>
                   <div class="form-group ">
                    <label for="ccomment" class="control-label col-lg-2">Solusi perbaikan </label>
                    <div class="col-lg-10">
                      <textarea class="form-control " id="ccomment" name="comment" required></textarea>
                    </div>
                  </div>
                <div class="form-group last">
                  <label class="control-label col-md-3">Image Upload</label>
                  <div class="col-md-9">
                    <div class="fileupload fileupload-new" data-provides="fileupload">
                      <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                        <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=no+image" alt="" />
                      </div>
                      <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                      <div>
                        <span class="btn btn-theme02 btn-file">
                          <span class="fileupload-new"><i class="fa fa-paperclip"></i> Pilih foto</span>
                        <span class="fileupload-exists"><i class="fa fa-undo"></i> Ganti</span>
                        <input type="file" class="default" />
                        </span>
                        <a href="advanced_form_components.html#" class="btn btn-theme04 fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash-o"></i> Hapus</a>
                      </div>
                    </div>
                    <span class="label label-info">Catatan!</span>
                    <span>
                      Foto harus memiliki resolusi 1000 X 1300 pixels
                      </span>
                  </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                      <button class="btn btn-theme" type="submit">Simpan</button>
                      <button class="btn btn-theme04" type="button">Batal</button>
                    </div>
                  </div>
              </form>
            </div>
            <!-- /form-panel -->
          </div>
          <!-- /col-lg-12 -->
        </div>
        <!-- row -->
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
    <!--footer start-->
    <footer class="site-footer">
      <div class="text-center">
        <p>
          &copy; Copyrights <strong>Dashio</strong>. All Rights Reserved
        </p>
        <div class="credits">
          <!--
            You are NOT allowed to delete the credit link to TemplateMag with free version.
            You can delete the credit link only if you bought the pro version.
            Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/dashio-bootstrap-admin-template/
            Licensing information: https://templatemag.com/license/
          -->
          Created with Dashio template by <a href="https://templatemag.com/">TemplateMag</a>
        </div>
        <a href="advanced_form_components.html#" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer>
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="<?php echo base_url('assets/lib/jquery/jquery.min.js')?>"></script>
  <script src="<?php echo base_url('assets/lib/bootstrap/js/bootstrap.min.js')?>"></script>
  <script class="include" type="text/javascript" src="<?php echo base_url('assets/lib/jquery.dcjqaccordion.2.7.js')?>"></script>
  <script src="<?php echo base_url('assets/lib/jquery.scrollTo.min.js')?>"></script>
  <script src="<?php echo base_url('assets/lib/jquery.nicescroll.js" type="text/javascript')?>"></script>
  <!--common script for all pages-->
  <script src="<?php echo base_url('assets/lib/common-scripts.js')?>"></script>
  <!--script for this page-->
  <script src="<?php echo base_url('assets/lib/jquery-ui-1.9.2.custom.min.js')?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/lib/bootstrap-fileupload/bootstrap-fileupload.js')?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/lib/bootstrap-datepicker/js/bootstrap-datepicker.js')?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/lib/bootstrap-daterangepicker/date.js')?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/lib/bootstrap-daterangepicker/daterangepicker.js')?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/lib/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js')?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/lib/bootstrap-daterangepicker/moment.min.js')?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/lib/bootstrap-timepicker/js/bootstrap-timepicker.js')?>"></script>
  <script src="<?php echo base_url('assets/lib/advanced-form-components.js')?>"></script>

</body>

</html>
