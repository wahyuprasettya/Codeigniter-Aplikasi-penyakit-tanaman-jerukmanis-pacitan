 <?php 
  echo '<aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="profile.html"><img src="<?php echo base_url('assets/img/ui-sam.jpg')?>" class="img-circle" width="80"></a></p>
          <h5 class="centered">Sam Soffes</h5>
          <li class="mt">
            <a class="active" href="index.html">
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
    </aside>';