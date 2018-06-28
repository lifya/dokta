        <!-- Page Content -->

    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Tanda Terima Tugas Akhir</li>
      </ol>
        <!-- Page Content -->
      <div class="pull-right">
        <a href="#" class="btn btn-sm btn-success" data-toggle="modal" data-target="#ModalaAdd" style="background-color: #07294e"><i class="fa fa-plus"></i> Tambah </a>
      </div>
      <br><br>
      <div>
        <?= $this->session->flashdata('msg') ?>
      </div>
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" style="text-align: center;" width="100%" cellspacing="0" id="mydata">
            <thead>
              <tr>
              <th>NIM</th>
              <th>Nama</th>
              <th>Tanggal</th>
              <th>Aksi</th>
              </tr>
            </thead>
            <tbody id="show_data">
              <?php foreach ($dataTA as $key) {?>
              <tr>
              <td><?= $key->nim ?></td>
              <td><?= $key->nama ?></td>
              <td><?= $key->tanggal ?></td>
              <td>
                <button class="btn btn-success" data-toggle="modal" data-target="#ModalaEdit" onclick="get_data('<?php echo $key->nim ?>')">Edit</button>
                <a href="<?= base_url('index.php/cAdmin/hapus_TandaTerimaTA/'."$key->nim") ?>" class="btn btn-danger">Hapus</a>
              </td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
    </div>


       
        <!-- MODAL ADD -->
        <div class="modal fade" id="ModalaAdd" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel" style="font-color : #07294e">Tambah Tanda Terima TA</h3>
                <div class="pull-right">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
            </div>
            <?= form_open_multipart('index.php/cAdmin/simpan_TandaTerimaTA') ?>
                <div class="modal-body">

                    <div class="form-group" style="margin-bottom: 50px">
                        <div class="pull-left">
                            <label class="control-label col-md-4">NIM </label>
                        </div>
                        <div class="pull-right">
                        <div class="col-md-4">
                            <input name="nimTTTA" id="TTTA_nim" class="form-control" type="text" placeholder="NIM" style="width:335px;" required>
                        </div>
                        </div>
                    </div>      

                    <div class="form-group" style="margin-bottom: 100px">
                        <div class="pull-left">
                            <label class="control-label col-md-4" >Nama </label>
                        </div>
                        <div class="pull-right">
                        <div class="col-md-4">
                            <input name="namaTTTA" id="TTTA_nama" class="form-control" type="text" placeholder="Nama" style="width:335px;" required>
                        </div>
                        </div>
                    </div>

                    <div class="form-group" style="margin-bottom: 50px">
                        <div class="pull-left">
                            <label class="control-label col-md-4" >Tanggal </label>
                        </div>
                        <div class="pull-right">
                        <div class="col-md-4">
                            <input name="tglTTTA" id="TTTA_tgl" class="form-control" type="date" placeholder="Tanggal" style="width:335px;" required>
                        </div>
                        </div>
                    </div>

                </div>

                <div class="pull-right">
                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    <input type="submit" class="btn btn-info" id="btn_simpan" value="Simpan" name="simpan">
                </div>
                </div>
            <?= form_close() ?>
            </div>
            </div>
        </div>
        <!--END MODAL ADD-->

        <!-- MODAL EDIT -->
        <div class="modal fade" id="ModalaEdit" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel" style="font-color : #07294e">Edit Tanda Terima TA</h3>
                <div class="pull-right">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
            </div>
             <?= form_open_multipart('index.php/cAdmin/update_TandaTerimaTA' ) ?>
                <input type="hidden" name="nimTTTA" id="nimTTTA_edit_hidden">
                <div class="modal-body">

                    <div class="form-group" style="margin-bottom: 50px">
                        <div class="pull-left">
                            <label class="control-label col-xs-3" >NIM</label>
                        </div>
                        <div class="pull-right">
                        <div class="col-xs-9">
                            <input name="nimTTTA_edit" id="TTTA_nim2" class="form-control" type="text" placeholder="NIM" style="width:335px;" disabled>
                        </div>
                        </div>
                    </div>

                    <div class="form-group" style="margin-bottom: 100px">
                        <div class="pull-left">
                            <label class="control-label col-xs-3" >Nama</label>
                        </div>
                        <div class="pull-right">
                        <div class="col-xs-9">
                            <input name="namaTTTA_edit" id="TTTA_nama2" class="form-control" type="text" placeholder="Nama" style="width:335px;" required>
                        </div>
                        </div>
                    </div>

                     <div class="form-group">
                        <div class="pull-left">
                            <label class="control-label col-xs-3" >Tanggal</label>
                        </div>
                        <div class="pull-right">
                        <div class="col-xs-9">
                            <input name="tglTTTA_edit" id="TTTA_tgl2" class="form-control" type="date" placeholder="Tanggal" style="width:335px;" required>
                        </div>
                        </div>
                    </div>
                    
                </div>

                <div class="pull-right">
                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    <input type="submit" class="btn btn-success" name="edit_data_tanda_terima">
                </div>
                </div>
            <?= form_close() ?>
            </div>
            </div>
        </div>
        <!--END MODAL EDIT-->

        <!--MODAL HAPUS-->
        <div class="modal fade" id="ModalHapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">

                        <div class="pull-left">
                            <h4 class="modal-title" id="myModalLabel" style="font-color : #07294e">Hapus Tanda Terima TA</h4>
                        </div>
                        <div class="pull-right">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></button>
                        </div>
                    </div>
                    <form class="form-horizontal">
                    <div class="modal-body">
                                          
                            <input type="hidden" name="kode" id="textkode" value="">
                            <div class="alert alert-warning"><p>Apakah Anda yakin mau menghapus barang ini?</p></div>
                                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                        <button class="btn_hapus btn btn-danger" id="btn_hapus" onclick="delete_data('<?= $key->nim ?>')">Hapus</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <!--END MODAL HAPUS-->

<script type="text/javascript" src="<?php echo base_url().'assets/vendor/jquery/jquery.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/bootstrap/js/bootstrap.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/vendor/datatables/jquery.dataTables.js'?>"></script>
<script type="text/javascript">
         $(document).ready(function() {
            $('#mydata').DataTable({
                responsive: true
            });
        });

        function get_data(username) {
            $.ajax({
                url: '<?= base_url('index.php/cAdmin/tandaTerimaTA') ?>',
                type: 'POST',
                data: {
                    username: username,
                    get: true
                },
                success: function(response){
                    console.log(response);
                    response = JSON.parse(response);
                    $('#TTTA_nim2, #nimTTTA_edit_hidden').val(response.nim);
                    $('#TTTA_nama2').val(response.nama);
                    $('#TTTA_tgl2').val(response.tanggal);
                    },
                error: function(e) {console.log(e.responseText);}
            });
        }

        function delete_data(username) {
                    $.ajax({
                        url: '<?= base_url('admin/hapus_TandaTerimaTA') ?>',
                        type: 'POST',
                        data: {
                            username: username,
                            delete: true
                        },
                        success: function() {
                            window.location = '<?= base_url('admin/data-mahasiswa') ?>';
                        }
                    });
                }
</script>

        
