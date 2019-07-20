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
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/zabuto_calendar.css')?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/lib/gritter/css/jquery.gritter.css')?>" />
  <!-- Custom styles for this template -->
  <link href="<?php echo base_url('assets/css/style.css')?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/css/style-responsive.css')?>" rel="stylesheet">
  <script src="<?php echo base_url('assets/lib/chart-master/Chart.js')?>"></script>

  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
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
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper site-min-height">
        <div class="row mt">
          <div class="col-lg-12">
            <div class="row content-panel">
              <div class="col-md-4 profile-text mt mb centered">
                <div class="right-divider hidden-sm hidden-xs">
                  <h4>1922</h4>
                  <h6>FOLLOWERS</h6>
                  <h4>290</h4>
                  <h6>FOLLOWING</h6>
                  <h4>$ 13,980</h4>
                  <h6>MONTHLY EARNINGS</h6>
                </div>
              </div>
              <!-- /col-md-4 -->
              <div class="col-md-4 profile-text">
                <h3>Sam Soffes</h3>
                <h6>Main Administrator</h6>
                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC.</p>      
              </div>
              <!-- /col-md-4 -->
              <div class="col-md-4 centered">
                <div class="profile-pic">
                  <p><img src="<?php echo base_url('assets/img/ui-sam.jpg')?>" class="img-circle"></p>
                </div>
              </div>
              <!-- /col-md-4 -->
            </div>
            <!-- /row -->
          </div>
              <!-- /col-md-8  -->
            </div>
            <div class="row">
              </div>
              <!-- /col-md-4 -->
              <div class="col-md-4 mb">
                  </div>
                </div>
              </div>
              <div class="col-md-4 mb">
            </div>
            <div class="row">
              </div>
              <div class="col-lg-4 col-md-4 col-sm-4 mb">
                  </div>
              </div>
              <br><br><br><br>
              <div class="col-md-4 col-sm-4 mb">
                </div>
              </div>
            </div>
          </div>
      </section>
    </section>


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
        <a href="index.html#" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer>
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="<?php echo base_url('assets/lib/jquery/jquery.min.js')?>"></script>
  <script src="<?php echo base_url('assets/lib/bootstrap/js/bootstrap.min.js')?>"></script>
  <script class="include" type="text/javascript" src="<?php echo base_url('lib/jquery.dcjqaccordion.2.7.js')?>"></script>
  <script src="<?php echo base_url('assets/lib/jquery.scrollTo.min.js')?>"></script>
  <script src="<?php echo base_url('assets/lib/jquery.nicescroll.js')?>" type="text/javascript"></script>
  <script src="<?php echo base_url('assets/lib/jquery.sparkline.js')?>"></script>
  <!--common script for all pages-->
  <script src="<?php echo base_url('assets/lib/common-scripts.js')?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/lib/gritter/js/jquery.gritter.js')?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/lib/gritter-conf.js')?>"></script>
  <!--script for this page-->
  <script src="<?php echo base_url('assets/lib/sparkline-chart.js')?>"></script>
  <script src="<?php echo base_url('assets/lib/zabuto_calendar.js')?>"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      var unique_id = $.gritter.add({
        // (string | mandatory) the heading of the notification
        title: 'Welcome to Dashio!',
        // (string | mandatory) the text inside the notification
        text: 'Hover me to enable the Close Button. You can hide the left sidebar clicking on the button next to the logo.',
        // (string | optional) the image to display on the left
        image: '<?php echo base_url('assets/img/ui-sam.jpg')?>',
        // (bool | optional) if you want it to fade out on its own or just sit there
        sticky: false,
        // (int | optional) the time you want it to be alive for before fading out
        time: 8000,
        // (string | optional) the class name you want to apply to that specific message
        class_name: 'my-sticky-class'
      });

      return false;
    });
  </script>
  <script type="application/javascript">
    $(document).ready(function() {
      $("#date-popover").popover({
        html: true,
        trigger: "manual"
      });
      $("#date-popover").hide();
      $("#date-popover").click(function(e) {
        $(this).hide();
      });

      $("#my-calendar").zabuto_calendar({
        action: function() {
          return myDateFunction(this.id, false);
        },
        action_nav: function() {
          return myNavFunction(this.id);
        },
        ajax: {
          url: "show_data.php?action=1",
          modal: true
        },
        legend: [{
            type: "text",
            label: "Special event",
            badge: "00"
          },
          {
            type: "block",
            label: "Regular event",
          }
        ]
      });
    });

    function myNavFunction(id) {
      $("#date-popover").hide();
      var nav = $("#" + id).data("navigation");
      var to = $("#" + id).data("to");
      console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
    }
  </script>
</body>

</html>
