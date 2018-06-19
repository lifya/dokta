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
        <!-- /#sidebar-wrapper -->

        <!-- Page Content TTTA -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <h3>Tanda Terima Tugas Akhir
                    <div class="pull-right"><a href="#" class="btn btn-sm btn-success" data-toggle="modal" data-target="#ModalaAdd"><span class="fa fa-plus"></span> Tambah</a></div>
                </h3>
                <hr style="width: 400px; margin-left: 5px">

                 <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="text-align: center;">
                        <thead>
                            <tr>
                            <th>Tanggal</th>
                            <th>Nama</th>
                            <th>NIM</th>
                            <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody id="show_data">
                      
                        </tbody>
                    </table>
                </div>
            </div>
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

<!-- Page Content Data Dosen -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <h3>Tanda Terima Tugas Akhir
                    <div class="pull-right"><a href="#" class="btn btn-sm btn-success" data-toggle="modal" data-target="#ModalaAdd"><span class="fa fa-plus"></span> Tambah</a></div>
                </h3>
                <hr style="width: 400px; margin-left: 5px">

                 <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="text-align: center;">
                        <thead>
                            <tr>
                            <th>NIP</th>
                            <th>Nama Dosen</th>
                            <th>Email</th>
                            <th>Alamat</th>
                            <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody id="show_data">
                      
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


<!-- <script type="text/javascript">
    $(document).ready(function(){
        tampil_data_TTTA();   //pemanggilan fungsi tampil barang.
        
        $('#mydata').dataTable();
         
        //fungsi tampil barang
        function tampil_data_TTTA(){
            $.ajax({
                type  : 'ajax',
                url   : '<?php echo base_url()?>index.php/barang/data_barang',
                async : false,
                dataType : 'json',
                success : function(data){
                    var html = '';
                    var i;
                    for(i=0; i<data.length; i++){
                        html += '<tr>'+
                                '<td>'+data[i].Tanggal+'</td>'+
                                '<td>'+data[i].Nama+'</td>'+
                                '<td>'+data[i].NIM+'</td>'+
                                '<td style="text-align:right;">'+
                                    '<a href="javascript:;" data="'+data[i].Tanggal+'">Edit</a>'+' '+
                                    '<a href="javascript:;" data="'+data[i].Tanggal+'">Hapus</a>'+
                                '</td>'+
                                '</tr>';
                    }
                    $('#show_data').html(html);
                }

            });
        } -- >
<?php $this->load->view('Include/Admin/vFooter'); ?>
