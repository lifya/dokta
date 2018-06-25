
      <header class="header black-bg">
        <div class="sidebar-toggle-box">
          <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
        </div>
          <!--logo start-->
          <a href="cMain" class="logo"><b>DOKTA</b></a>
          <!--logo end-->
          <div class="top-menu">
            <ul class="nav pull-right top-menu">
              <li><a class="logout" href="<?= base_url('index.php/cLogout'); ?>">Logout</a></li>
            </ul>
          </div>
      </header>
      <!--header end-->

      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">

                    <li class="mt">
                        <a href="<?= base_url('index.php/cMahasiswa') ?>">
                            <i class="fa fa-dashboard"></i>
                            <span>Profil</span>
                        </a>
                    </li>

                    <li class="sub-menu">
                        <a href="javascript:;" >
                            <i class="fa fa-desktop"></i>
                            <span>Publikasi Tugas Akhir</span>
                        </a>
                        <ul class="sub">
                            <li><a  href="<?= base_url('index.php/cMahasiswa/dataDiri') ?>">Melengkapi Data Diri</a></li>
                            <li><a  href="<?= base_url('index.php/cMahasiswa/detilTA') ?>">Mengisi Detil Tugas Akhir</a></li>
                            <li><a  href="<?= base_url('index.php/cMahasiswa/unggah') ?>">Mengunggah Dokumen Tugas Akhir</a></li>
                        </ul>
                    </li>

                    <li class="sub-menu">
                        <a href="<?= base_url('index.php/cMahasiswa/pratinjau') ?>">
                            <i class="fa fa-dashboard"></i>
                            <span>Pratinjau</span>
                        </a>
                    </li>

                    <li class="sub-menu">
                        <a href="<?= base_url('index.php/cMahasiswa/tanggapan') ?>">
                            <i class="fa fa-dashboard"></i>
                            <span>Tanggapan</span>
                        </a>
                    </li>
                  
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>