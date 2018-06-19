<?php $this->load->view('Include/Admin/vHeader') ?>

<!-- Navigation -->
    <nav class="navbar navbar-light bg-light static-top" style="border: 10px">
      <div class="container">
        <a class="navbar-brand" href="#">DOKTA</a>
      </div>
    </nav>

    <div id="wrapper" class="toggled">

        <!-- Sidebar -->
        <div id="sidebar-wrapper" class="col-md-3">
            <ul class="sidebar-nav" style=" margin-top: 10px">
                <li class="nav-item" data-toggle="tooltip" title="Tanda Terima Tugas Akhir">
                <a src="<?php echo base_url().'view/Admin/vTTTA.php'?>">Tanda Terima Tugas Akhir</a>
                </li>
                <li class="nav-item" data-toggle="tooltip" title="Tugas Akhir Mahasiswa">
                <a src="<?php echo base_url().'view/Admin/vTA.php'?>">Tugas Akhir Mahasiswa</a>
                </li>
                <li class="nav-item" data-toggle="tooltip" title="Data Dosen">
                <a href="vDataDosen.php">Data Dosen</a>
                </li>
                <li>
                <a href="logout.php">Logout</a>
                </li>

            </ul>
        </div>

<!-- Page Content TA -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <h3>Tugas Akhir Mahasiswa
                </h3>
                <hr style="width: 400px; margin-left: 5px">

                 <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="text-align: center;">
                        <thead>
                            <tr>
                            <th></th>
                            <th>NIM</th>
                            <th>Nama</th>
                            <th>Judul TA</th>
                            <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody id="show_data">
                      
                        </tbody>
                    </table>
                </div>
            </div>
        </div>