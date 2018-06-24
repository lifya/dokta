        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <h3 style="font-color : #07294e!important">Data Dosen
                    <div class="pull-right"><a href="#" class="btn btn-sm btn-success" data-toggle="modal" data-target="#ModalaAdd" style="background-color: #07294e"><span class="fa fa-plus"></span> Tambah </a></div>
                </h3>
                <hr style="width: 400px; margin-left: 5px">

                 <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="text-align: center;" id="mydata">
                        <thead>
                            <tr >
                            <th>NIP</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Alamat</th>
                            <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody id="show_data2">
                      
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- MODAL ADD -->
        <div class="modal fade" id="ModalaAdd" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 class="modal-title" id="myModalLabel" style="font-color : #07294e">Tambah Data Dosen</h3>
            </div>
            <form class="form-horizontal">
                <div class="modal-body">
                    <div class="form-group">
                        <label class="control-label col-xs-3">NIP </label>
                        <div class="col-xs-9">
                            <input name="nip_Dosen" id="nip_Dosen" class="form-control" type="text" placeholder="NIP" style="width:335px;" required>
                        </div>
                    </div>   

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Nama </label>
                        <div class="col-xs-9">
                            <input name="nama_Dosen" id="nama_Dosen" class="form-control" type="text" placeholder="Nama" style="width:335px;" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Email </label>
                        <div class="col-xs-9">
                            <input name="email_Dosen" id="email_Dosen" class="form-control" type="text" placeholder="Email" style="width:335px;" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Alamat </label>
                        <div class="col-xs-9">
                            <input name="alamat_Dosen" id="alamat_Dosen" class="form-control" type="text" placeholder="Alamat" style="width:335px;" required>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    <button class="btn btn-info" id="btn_simpan">Simpan</button>
                </div>
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
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 class="modal-title" id="myModalLabel" style="font-color : #07294e">Edit Data Dosen</h3>
            </div>
            <form class="form-horizontal">
                <div class="modal-body">

                    <div class="form-group">
                        <label class="control-label col-xs-3" >NIP </label>
                        <div class="col-xs-9">
                            <input name="nipDosen_edit" id="nip_Dosen2" class="form-control" type="text" placeholder="NIP" style="width:335px;" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Nama </label>
                        <div class="col-xs-9">
                            <input name="namaDosen_edit" id="nama_Dosen2" class="form-control" type="text" placeholder="Nama" style="width:335px;" required>
                        </div>
                    </div>

                     <div class="form-group">
                        <label class="control-label col-xs-3" >Email </label>
                        <div class="col-xs-9">
                            <input name="email_edit" id="email_Dosen2" class="form-control" type="text" placeholder="Email" style="width:335px;" readonly>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Alamat </label>
                        <div class="col-xs-9">
                            <input name="tglTTTA_edit" id="tgl_TTTA2" class="form-control" type="text" placeholder="Tanggal" style="width:335px;" readonly>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    <button class="btn btn-info" id="btn_update">Update</button>
                </div>
            </form>
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

<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.dataTables.js'?>"></script>
<script type="text/javascript">
    $(document).ready(function(){
        tampil_data_TandaTerimaTA();   //pemanggilan fungsi tampil Tanda Terima TA.
        
        $('#mydata').dataTable();
         
        //fungsi tampil TTTA
        function tampil_data_TandaTerimaTA(){
            $.ajax({
                type  : 'ajax',
                url   : '<?php echo base_url()?>index.php/cAdmin/data_TandaTerimaTA',
                async : false,
                dataType : 'json',
                success : function(data){
                    var html = '';
                    var i;
                    for(i=0; i<data.length; i++){
                        html += '<tr>'+
                                '<td>'+data[i].nim+'</td>'+
                                '<td>'+data[i].nama+'</td>'+
                                '<td>'+data[i].tanggal+'</td>'+
                                '<td style="text-align:right;">'+
                                    '<a href="javascript:;" class="btn btn-info btn-xs item_edit" style="background-color : #07294e" data="'+data[i].nim+'">Edit</a>'+' '+
                                    '<a href="javascript:;" class="btn btn-danger btn-xs item_hapus" style="background-color : #07294e" data="'+data[i].nim+'">Hapus</a>'+
                                '</td>'+
                                '</tr>';
                    }
                    $('#show_data').html(html);
                }

            });
        }

        //GET UPDATE
        $('#show_data').on('click','.item_edit',function(){
            var id=$(this).attr('data');
            $.ajax({
                type : "GET",
                url  : "<?php echo base_url('index.php/cAdmin/get_TandaTerimaTA')?>",
                dataType : "JSON",
                data : {id:id},
                success: function(data){
                    $.each(data,function(nim, nama, tanggal){
                        $('#ModalaEdit').modal('show');
                        $('[name="nimTTTA_edit"]').val(data.nim);
                        $('[name="namaTTTA_edit"]').val(data.nama);
                        $('[name="tglTTTA_edit"]').val(data.tanggal);
                    });
                }
            });
            return false;
        });


        //GET HAPUS
        $('#show_data').on('click','.item_hapus',function(){
            var id=$(this).attr('data');
            $('#ModalHapus').modal('show');
            $('[name="nim_TTTA"]').val(id);
        });

        //Simpan Barang
        $('#btn_simpan').on('click',function(){
            var nim_TTTA=$('#nim_TTTA').val();
            var nama_TTTA=$('#nama_TTTA').val();
            var tgl_TTTA=$('#tgl_TTTA').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo base_url('index.php/cAdmin/simpan_TandaTerimaTA')?>",
                dataType : "JSON",
                data : {nim_TTTA:nim_TTTA , nama_TTTA:nama_TTTA , tgl_TTTA:tgl_TTTA },
                success: function(data){
                    $('[name="nim_TTTA"]').val("");
                    $('[name="nama_TTTA"]').val("");
                    $('[name="tgl_TTTA"]').val("");
                    $('#ModalaAdd').modal('hide');
                    tampil_data_TandaTerimaTA();
                }
            });
            return false;
        });

        //Update Barang
        $('#btn_update').on('click',function(){
            var nim_TTTA=$('#nim_TTTA2').val();
            var nama_TTTA=$('#nama_TTTA2').val();
            var tgl_TTTA=$('#tgl_TTTA2').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo base_url('index.php/cAdmin/update_TandaTerimaTA')?>",
                dataType : "JSON",
                data : {nim_TTTA:nim_TTTA , nama_TTTA:nama_TTTA , tgl_TTTA:tgl_TTTA},
                success: function(data){
                    $('[name="nimTTTA_edit"]').val("");
                    $('[name="namaTTTA_edit"]').val("");
                    $('[name="tglTTTA_edit"]').val("");
                    $('#ModalaEdit').modal('hide');
                    tampil_data_TandaTerimaTA();
                }
            });
            return false;
        });

        //Hapus Barang
        $('#btn_hapus').on('click',function(){
            var nim_TTTA=$('#textkode').val();
            $.ajax({
            type : "POST",
            url  : "<?php echo base_url('index.php/cAdmin/hapus_TandaTerimaTA')?>",
            dataType : "JSON",
                    data : {nim_TTTA: nim_TTTA},
                    success: function(data){
                            $('#ModalHapus').modal('hide');
                            tampil_data_TandaTerimaTA();
                    }
                });
                return false;
            });

    });

</script>
