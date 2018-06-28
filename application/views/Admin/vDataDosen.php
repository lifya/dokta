    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Data Dosen</li>
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
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" id="mydata">
          <thead>
            <tr >
              <th>NIP</th>
              <th>Nama</th>
              <th>Email</th>
              <th>Alamat</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody id="show_data">
            <?php foreach ($data_dosen as $d) {
                                
            ?>
            <tr>
              <td><?= $d->nip; ?></td>
              <td><?= $d->nama; ?></td>
              <td><?= $d->email; ?></td>
              <td><?= $d->alamat; ?></td>
              <td>
                <button class="btn btn-success" data-toggle="modal" data-target="#ModalaEdit" onclick="get_data('<?= $d->nip ?>')">Edit</button>
                <a href="<?= base_url('index.php/cAdmin/hapus_DataDosen/'."$d->nip") ?>" class="btn btn-danger">Hapus</a>
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
                <h3 class="modal-title" id="myModalLabel" style="font-color : #07294e">Tambah Data Dosen</h3>
                <div class="pull-right">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
            </div>

            <?= form_open_multipart('index.php/cAdmin/simpan_DataDosen') ?>
                <div class="modal-body">
                    <div class="form-group" style="margin-bottom: 50px">
                        <div class="pull-left">
                            <label class="control-label col-md-4">NIP </label>
                        </div>
                        <div class="pull-right">
                        <div class="col-md-4">
                            <input name="nipDosen" id="Dosen_nip" class="form-control" type="numeric" placeholder="NIP" style="width:335px;" required>
                        </div>
                        </div>
                    </div>   

                    <div class="form-group" style="margin-bottom: 100px">
                        <div class="pull-left">
                            <label class="control-label col-md-4" >Nama </label>
                        </div>
                        <div class="pull-right">
                        <div class="col-md-4">
                            <input name="namaDosen" id="Dosen_nama" class="form-control" type="text" placeholder="Nama" style="width:335px;" required>
                        </div>
                        </div>
                    </div>

                    <div class="form-group" style="margin-bottom: 150px">
                        <div class="pull-left">
                            <label class="control-label col-md-4" >Email </label>
                        </div>
                        <div class="pull-right">
                        <div class="col-md-4">
                            <input name="emailDosen" id="Dosen_email" class="form-control" type="text" placeholder="Email" style="width:335px;" required>
                        </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="pull-left">
                            <label class="control-label col-md-4" >Alamat </label>
                        </div>
                        <div class="pull-right">
                        <div class="col-md-4">
                            <input name="alamatDosen" id="Dosen_alamat" class="form-control" type="text" placeholder="Alamat" style="width:335px;" required>
                        </div>
                        </div>
                    </div>
                </div>

                <div class="pull-right">
                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    <input type="submit" class="btn btn-info" name="save" value="Simpan">
                </div>
                </div>
                <?= form_close() ?>
            </form>
            </div>
            </div>
        </div>
        <!--END MODAL ADD-->

        <!-- MODAL EDIT -->
        <div class="modal fade" id="ModalaEdit" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <div class="pull-left">
                    <h3 class="modal-title" id="myModalLabel" style="font-color : #07294e">Edit Data Dosen</h3>
                </div>
                <div class="pull-right">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
            </div>
            <?= form_open_multipart('index.php/cAdmin/update_DataDosen') ?>
                <div class="modal-body">
                    <input type="hidden" name="nip" id="Dosen_nip2_edit">

                    <div class="form-group" style="margin-bottom: 50px">
                        <div class="pull-left">
                            <label class="control-label col-md-4" >NIP </label>
                        </div>
                        <div class="pull-right">
                        <div class="col-md-4">
                            <input name="nipDosen_edit" id="Dosen_nip2" class="form-control" type="text" placeholder="NIP" style="width:335px;" disabled>
                        </div>
                        </div>
                    </div>

                    <div class="form-group" style="margin-bottom: 100px">
                        <div class="pull-left">
                            <label class="control-label col-md-4" >Nama </label>
                        </div>
                        <div class="pull-right">
                        <div class="col-md-4">
                            <input name="namaDosen_edit" id="Dosen_nama2" class="form-control" type="text" placeholder="Nama" style="width:335px;" required>
                        </div>
                        </div>
                    </div>

                     <div class="form-group" style="margin-bottom: 150px">
                        <div class="pull-left">
                            <label class="control-label col-md-4" >Email </label>
                        </div>
                        <div class="pull-right">
                        <div class="col-md-4">
                            <input name="emailDosen_edit" id="Dosen_email2" class="form-control" type="text" placeholder="Email" style="width:335px;" required="">
                        </div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="pull-left">
                            <label class="control-label col-md-4" >Alamat </label>
                        </div>
                        <div class="pull-right">
                        <div class="col-md-4">
                            <input name="alamatDosen_edit" id="Dosen_alamat2" class="form-control" type="text" placeholder="Alamat" style="width:335px;" required>
                        </div>
                        </div>
                    </div>
                </div>

                <div class="pull-right">
                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    <input class="btn btn-success" type="submit" name="save" value="Simpan">
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
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></button>
                        <h4 class="modal-title" id="myModalLabel" style="font-color : #07294e">Hapus Tanda Terima TA</h4>
                    </div>
                    <form class="form-horizontal">
                    <div class="modal-body">
                                          
                            <input type="hidden" name="kode" id="textkode" value="">
                            <div class="alert alert-warning"><p>Apakah Anda yakin mau menghapus barang ini?</p></div>
                                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                        <button class="btn_hapus btn btn-danger" id="btn_hapus">Hapus</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <!--END MODAL HAPUS-->
    </div>
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
                url: '<?= base_url('index.php/cAdmin/dataDosen') ?>',
                type: 'POST',
                data: {
                    username: username,
                    get: true
                },
                success: function(response){
                    console.log(response);
                    response = JSON.parse(response);
                    $('#Dosen_nip2, #Dosen_nip2_edit').val(response.nip);
                    $('#Dosen_nama2').val(response.nama);
                    $('#Dosen_email2').val(response.email);
                    $('#Dosen_alamat2').val(response.alamat);
                    },
                error: function(e) {console.log(e.responseText);}
            });
        }

        // function delete_data(username) {
        //             $.ajax({
        //                 url: '<?= base_url('index.php/cAdmin/hapus_DataDosen') ?>',
        //                 type: 'POST',
        //                 data: {
        //                     username: username,
        //                     delete: true
        //                 },
        //                 success: function() {
        //                     window.location = '<?= base_url('index.php/cAdmin/hapus_DataDosen') ?>';
        //                 }
        //             });
        //         }
</script>
