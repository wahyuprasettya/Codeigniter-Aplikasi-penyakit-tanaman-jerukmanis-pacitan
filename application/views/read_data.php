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
  <!-- Custom styles for this template -->
  <link href="<?php echo base_url('assets/css/style.css')?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/css/style-responsive.css')?>" rel="stylesheet">
</head>
<body>
  <section id="container">
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="index.html" class="logo"><b>DASH<span>IO</span></b></a>
      <!--logo end-->
      <div class="nav notify-row" id="top_menu">
      </div>
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="<?php echo base_url()?>">Logout</a></li>
        </ul>
      </div>
    </header>
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="profile.html"><img src="<?php echo base_url('assets/img/profil.jpg')?>" class="img-circle" width="80"></a></p>
          <h5 class="centered">Wahyu adjie prasetyo</h5>
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
<section id="main-content">
      <section class="wrapper">
        <div class="row mt">
          <div class="col-md-12">
            <div class="content-panel">
              <table class="table table-striped table-advance table-hover">
                <h4><i class="fa fa-angle-right"></i> Data Penyakit tanaman</h4>
                <hr>
                <thead>
                  <tr>
                        <th><i class="fa fa-bookmark"></i> No</th>
                        <th><i class="fa fa-bookmark"></i> Nama penyakit</th>
                        <th><i class="fa fa-bookmark"></i> Aksi</th>
                      </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Company Ltd</td>
                    <td>
                    <button class="btn btn-primary btn-xs">
                     Lihat
                    </button>
                    <button class="btn btn-warning btn-xs" data-toggle="modal" data-target="#edit">
                      Edit
                    </button>
                    <button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#hapus">
                      Hapus
                      </button>
                    </td>
                </tbody>
              </table>
            </div>
            <!-- /content-panel -->
          </div>
          <!-- /col-md-12 -->
        </div>
        <!-- /row -->
      </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
    <!--footer start-->
    <br><br><br><br><br><br>
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
        <a href="basic_table.html#" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer>
    <!--footer end-->
  </section>

<!-- Modal edit-->
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title" id="myModalLabel">Edit Data</h4>
                    </div>
                    <div class="modal-body">
                    <div class="form-group ">
                      <label for="cname">Nama penyakit</label>
                      <input class="form-control " id="cname" type="text" name="email" required/><br>
                      <label for="ccomment">Solusi pencegahan</label>
                      <textarea class="form-control " id="ccomment" name="comment" required></textarea><br>
                      <label for="ccomment">Solusi penanganan</label>
                      <textarea class="form-control " id="ccomment" name="comment" required></textarea><br>
                      <label for="ccomment">Solusi perbaikan</label>
                      <textarea class="form-control " id="ccomment" name="comment" required></textarea><br>
                      <label for="ccomment">Foto</label>
                      <textarea class="form-control " id="ccomment" name="comment" required></textarea>
                      </div>
                    </div>

                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                  </div>
                </div>
              </div>

<!-- Modal hapus -->
<div class="modal fade" id="hapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title" id="myModalLabel">Hapus Data</h4>
                    </div>
                    <div class="modal-body">
                      Apakah anda ingin menghapus data?
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Batalkan</button>
                      <button type="button" class="btn btn-primary">Ya</button>
                    </div>
                  </div>
                </div>
              </div>

<script src="<?php echo base_url('assets/lib/jquery/jquery.min.js')?>"></script>
<script src="<?php echo base_url('assets/lib/bootstrap/js/bootstrap.min.js')?>"></script>
<script class="include" type="text/javascript" src="<?php echo base_url('assets/lib/jquery.dcjqaccordion.2.7.js')?>"></script>
<script src="<?php echo base_url('assets/lib/jquery.scrollTo.min.js')?>"></script>
<script src="<?php echo base_url('assets/lib/jquery.nicescroll.js')?>" type="text/javascript"></script>
  <!--common script for all pages-->
<script src="<?php echo base_url('assets/lib/common-scripts.js')?>"></script>
  <!--script for this page-->
<script type="text/javascript" src="<?php echo base_url('assets/lib/gritter/js/jquery.gritter.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/lib/gritter-conf.js')?>">"></script>
</body>
  
</body>

</html>