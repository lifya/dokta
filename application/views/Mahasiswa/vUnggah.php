    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
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
                                        <p>Unggah file dalam format <strong>PDF</strong></p>
                                    </div>
                                </div>

                                <?= form_open('index.php/cMahasiswa/Unggah') ?>
                                    <?php echo $this->session->flashdata('msg'); ?>
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
