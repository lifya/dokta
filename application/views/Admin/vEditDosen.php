        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <h3 style="font-color : #07294e!important">Edit Data Dosen
                    <div class="pull-right"><a href="#" class="btn btn-sm btn-success" data-toggle="modal" data-target="#ModalaAdd" style="background-color: #07294e"><span class="fa fa-plus"></span> Tambah </a></div>
                </h3>
                <hr style="width: 400px; margin-left: 5px">
                <div>
                    <?= $this->session->flashdata('msg') ?>
                </div>

               <?= form_open() ?>
             
                    <div class="form-group">
                        <label class="control-label col-xs-3">NIP </label>
                        <div class="col-xs-9">
                            <input name="nipDosen" id="Dosen_nip" class="form-control" type="text" style="width:335px;" required>
                        </div>
                    </div>   

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Nama </label>
                        <div class="col-xs-9">
                            <input name="namaDosen" id="Dosen_nama" class="form-control" type="text" style="width:335px;" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Email </label>
                        <div class="col-xs-9">
                            <input name="emailDosen" id="Dosen_email" class="form-control" type="text" style="width:335px;" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Alamat </label>
                        <div class="col-xs-9">
                            <input name="alamatDosen" id="Dosen_alamat" class="form-control" type="text" style="width:335px;" required>
                        </div>
                    </div>

                    <input type="submit" name="simpan" class="btn btn-info" value="Simpan" style="background: #07294e ; border-color: #ffc600; margin-left: 20%;">
            </form>
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
                            <input name="nipDosen_edit" id="Dosen_nip2" class="form-control" type="text" placeholder="NIP" style="width:335px;" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Nama </label>
                        <div class="col-xs-9">
                            <input name="namaDosen_edit" id="Dosen_nama2" class="form-control" type="text" placeholder="Nama" style="width:335px;" required>
                        </div>
                    </div>

                     <div class="form-group">
                        <label class="control-label col-xs-3" >Email </label>
                        <div class="col-xs-9">
                            <input name="emailDosen_edit" id="Dosen_email2" class="form-control" type="text" placeholder="Email" style="width:335px;" readonly>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Alamat </label>
                        <div class="col-xs-9">
                            <input name="alamatDosen_edit" id="Dosen_alamat2" class="form-control" type="text" placeholder="Alamat" style="width:335px;" readonly>
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
        tampil_data_Dosen();   //pemanggilan fungsi tampil Data dosen.
        
        $('#mydata').dataTable();
         
        //fungsi tampil TTTA
        function tampil_data_Dosen(){
            $.ajax({
                type  : 'ajax',
                url   : '<?php echo base_url()?>index.php/cAdmin/data_Dosen',
                async : false,
                dataType : 'json',
                success : function(data){
                    var html = '';
                    var i;
                    for(i=0; i<data.length; i++){
                        html += '<tr>'+
                                '<td>'+data[i].nip+'</td>'+
                                '<td>'+data[i].nama+'</td>'+
                                '<td>'+data[i].email+'</td>'+
                                '<td>'+data[i].alamat+'</td>'+
                                '<td style="text-align:right;">'+
                                    '<a href="javascript:;" class="btn btn-info btn-xs item_edit" style="background-color : #07294e" data-toggle="modal" data-target="#ModalaEdit" data="'+data[i].nip+'">Edit</a>'+' '+
                                    '<a href="javascript:;" class="btn btn-danger btn-xs item_hapus" style="background-color : #07294e" data-toggle="modal" data-target="#ModalHapus" data="'+data[i].nip+'">Hapus</a>'+
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
                url  : "<?php echo base_url('index.php/cAdmin/get_DataDosen')?>",
                dataType : "JSON",
                data : {id:id},
                success: function(data){
                    $.each(data,function(nip, nama, email, alamat){
                        $('#ModalaEdit').modal('show');
                        $('[name="nipDosen_edit"]').val(data.nip);
                        $('[name="namaDosen_edit"]').val(data.nama);
                        $('[name="emailDosen_edit"]').val(data.email);
                        $('[name="alamatDosen_edit"]').val(data.alamat);
                    });
                }
            });
            return false;
        });


        //GET HAPUS
        $('#show_data').on('click','.item_hapus',function(){
            var id=$(this).attr('data');
            $('#ModalHapus').modal('show');
            $('[name="nip"]').val(id);
        });

        //Simpan Barang
        $('#btn_simpan').on('click',function(){
            var nipDosen=$('#Dosen_nip').val();
            var namaDosen=$('#Dosen_nama').val();
            var emailDosen=$('#Dosen_email').val();
            var alamatDosen=$('#Dosen_alamat').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo base_url('index.php/cAdmin/simpan_DataDosen')?>",
                dataType : "JSON",
                data : {nipDosen:nipDosen , namaDosen:namaDosen , emailDosen:emailDosen , alamatDosen:alamatDosen},
                success: function(data){
                    $('[name="nipDosen"]').val("");
                    $('[name="namaDosen]').val("");
                    $('[name="emailDosen"]').val("");
                    $('[name="alamatDosen"]').val("");
                    $('#ModalaAdd').modal('hide');
                    tampil_data_Dosen();
                }
            });
            return false;
        });

        //Update Barang
        $('#btn_update').on('click',function(){
            var nipDosen=$('#Dosen_nip2').val();
            var namaDosen=$('#Dosen_nama2').val();
            var emailDosen=$('#Dosen_email2').val();
            var alamatDosen=$('#Dosen_alamat2').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo base_url('index.php/cAdmin/update_DataDosen')?>",
                dataType : "JSON",
                data : {nipDosen:nipDosen , namaDosen:namaDosen , emailDosen:emailDosen , alamatDosen:alamatDosen },
                success: function(data){
                    $('[name="nipDosen_edit"]').val("");
                    $('[name="namaDosen_edit"]').val("");
                    $('[name="emailDosen_edit"]').val("");
                    $('[name="alamatDosen_edit"]').val("");
                    $('#ModalaEdit').modal('hide');
                    tampil_data_Dosen();
                }
            });
            return false;
        });

        //Hapus Barang
        $('#btn_hapus').on('click',function(){
            var nipDosen=$('#textkode').val();
            $.ajax({
            type : "POST",
            url  : "<?php echo base_url('index.php/cAdmin/hapus_DataDosen')?>",
            dataType : "JSON",
                    data : {nipDosen: nipDosen},
                    success: function(data){
                            $('#ModalHapus').modal('hide');
                            tampil_data_Dosen();
                    }
                });
                return false;
            });

    });

</script>
