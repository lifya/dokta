    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="<?=base_url('index.php/cMahasiswa')?>">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Mengisi Detil Tugas Akhir</li>
      </ol>
      <div class="container-tab-nav">          
            <div class="inner-bg">
                <div class="container">
                    
                    <div class="row">
                        <div class="col-sm-9">
                            
                            <div class="form-box">
                                <div class="form-top">
                                    <div class="form-top-left">
                                        <label for="Upload Dokumen">Unggah Dokumen <span class="required">* .pdf</span></label>
                                    </div>
                                </div>
                                <div>
                                    <?php echo $this->session->flashdata('msg'); ?>
                                </div>
                                <?= form_open_multipart('index.php/cMahasiswa/unggah') ?>
                                    
                                    <div class="form-group">
                                        <input type="file" name="upload_file" required>
                                    </div>
                                    <input type="submit" name="simpan" class="btn btn-info" value="Simpan" style="background: #07294e ; border-color: #ffc600;">
                                
                                <?= form_close() ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
      </div>
    </div>
