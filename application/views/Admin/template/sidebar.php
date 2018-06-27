<nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-yellow" id="mainNav">
    <a class="navbar-brand" href="<?= base_url('index.php/cMain') ?>""><strong>DOKTA</strong></a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="<?=base_url('index.php/cAdmin')?>">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
          <a class="nav-link" href="<?=base_url('index.php/cAdmin/tandaTerimaTA')?>">
            <i class="fa fa-fw fa-area-chart"></i>
            <span class="nav-link-text">Tanda Terima Tugas Akhir</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="<?=base_url('index.php/cAdmin/tugasAkhir')?>">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">Tugas Akhir Mahasiswa</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="<?=base_url('index.php/cAdmin/dataDosen')?>">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">Data Dosen</span>
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