        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <h3 style="font-color : #07294e!important">Tanda Terima Tugas Akhir
                    <div class="pull-right"><a href="#" class="btn btn-sm btn-success" data-toggle="modal" data-target="#ModalaAdd" style="background-color: #07294e"><span class="fa fa-plus"></span> Tambah</a></div>
                </h3>
                <hr style="width: 400px; margin-left: 5px">

                 <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" id="mydata">
                        <thead>
                            <tr>
                            <th>NIM</th>
                            <th>Nama</th>
                            <th>Tanggal</th>
                            <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody id="show_data">
                            
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
                <h3 class="modal-title" id="myModalLabel" style="font-color : #07294e">Tambah Tanda Terima TA</h3>
            </div>
            <form class="form-horizontal">
                <div class="modal-body">
                    <div class="form-group">
                        <label class="control-label col-xs-3">NIM </label>
                        <div class="col-xs-9">
                            <input name="nimTTTA" id="TTTA_nim" class="form-control" type="text" placeholder="NIM" style="width:335px;" required>
                        </div>
                    </div>   

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Nama </label>
                        <div class="col-xs-9">
                            <input name="namaTTTA" id="TTTA_nama" class="form-control" type="text" placeholder="Nama" style="width:335px;" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Tanggal </label>
                        <div class="col-xs-9">
                            <input name="tglTTTA" id="TTTA_tgl" class="form-control" type="text" placeholder="Tanggal" style="width:335px;" required>
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
                <h3 class="modal-title" id="myModalLabel" style="font-color : #07294e">Edit Tanda Terima TA</h3>
            </div>
            <form class="form-horizontal">
                <div class="modal-body">

                    <div class="form-group">
                        <label class="control-label col-xs-3" >NIM</label>
                        <div class="col-xs-9">
                            <input name="nimTTTA_edit" id="TTTA_nim2" class="form-control" type="text" placeholder="NIM" style="width:335px;" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Nama</label>
                        <div class="col-xs-9">
                            <input name="namaTTTA_edit" id="TTTA_nama2" class="form-control" type="text" placeholder="Nama" style="width:335px;" required>
                        </div>
                    </div>

                     <div class="form-group">
                        <label class="control-label col-xs-3" >Tanggal</label>
                        <div class="col-xs-9">
                            <input name="tglTTTA_edit" id="TTTA_tgl2" class="form-control" type="text" placeholder="Tanggal" style="width:335px;" readonly>
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
                                '<td>'+
                                    '<a href="javascript:;" class="btn btn-info btn-xs item_edit" style="background-color : #07294e" data-toggle="modal" data-target="#ModalaEdit" data="'+data[i].nim+'">Edit</a>'+' '+
                                    '<a href="javascript:;" class="btn btn-danger btn-xs item_hapus" style="background-color : #07294e" data-toggle="modal" data-target="#ModalHapus" data="'+data[i].nim+'">Hapus</a>'+
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
            $('[name="nim"]').val(id);
        });

        //Simpan Barang
        $('#btn_simpan').on('click',function(){
            var nimTTTA=$('#TTTA_nim').val();
            var namaTTTA=$('#TTTA_nama').val();
            var tglTTTA=$('#TTTA_tgl').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo base_url('index.php/cAdmin/simpan_TandaTerimaTA')?>",
                dataType : "JSON",
                data : {nimTTTA:nimTTTA , namaTTTA:namaTTTA , tglTTTA:tglTTTA },
                success: function(data){
                    $('[name="nimTTTA"]').val("");
                    $('[name="namaTTTA"]').val("");
                    $('[name="tglTTTA"]').val("");
                    $('#ModalaAdd').modal('hide');
                    tampil_data_TandaTerimaTA();
                }
            });
            return false;
        });

        //Update Barang
        $('#btn_update').on('click',function(){
            var nimTTTA=$('#TTTA_nim2').val();
            var namaTTTA=$('#TTTA_nama2').val();
            var tglTTTA=$('#TTTA_tgl2').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo base_url('index.php/cAdmin/update_TandaTerimaTA')?>",
                dataType : "JSON",
                data : {nimTTTA:nimTTTA , namaTTTA:namaTTTA , tglTTTA:tglTTTA},
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
            var nimTTTA=$('#textkode').val();
            $.ajax({
            type : "POST",
            url  : "<?php echo base_url('index.php/cAdmin/hapus_TandaTerimaTA')?>",
            dataType : "JSON",
                    data : {nimTTTA: nimTTTA},
                    success: function(data){
                            $('#ModalHapus').modal('hide');
                            tampil_data_TandaTerimaTA();
                    }
                });
                return false;
            });

    });

</script>

        
