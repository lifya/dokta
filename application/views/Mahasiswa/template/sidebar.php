<nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-yellow" id="mainNav">
    <a class="navbar-brand" href="<?= base_url('index.php/cMain') ?>""><strong>DOKTA</strong></a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="<?=base_url('index.php/cMahasiswa')?>">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashbord</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-file"></i>
            <span class="nav-link-text">Publikasi Tugas Akhir</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseExamplePages">
            <li>
              <a href="<?=base_url('index.php/cMahasiswa/dataDiri')?>">Melengkapi Data Diri</a>
            </li>
            <li>
              <a href="<?=base_url('index.php/cMahasiswa/detilTA')?>">Mengisi Detil Tugas Akhir</a>
            </li>
            <li>
              <a href="<?=base_url('index.php/cMahasiswa/unggahPDF')?>">Mengunggah Dokumen PDF</a>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
          <a class="nav-link" href="<?=base_url('index.php/cMahasiswa/pratinjau')?>">
            <i class="fa fa-fw fa-area-chart"></i>
            <span class="nav-link-text">Pratinjau</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="<?=base_url('index.php/cMahasiswa/tanggapan')?>">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">Tanggapan</span>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <div class="input-group">
              <span class="nav-link font-color">
                <b><?php echo $username ?></b>
              </span>
            </div>
        </li>
        <li class="nav-item">
          <a href="<?php echo base_url('index.php/cLogout') ?>" class="nav-link">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="content-wrapper">