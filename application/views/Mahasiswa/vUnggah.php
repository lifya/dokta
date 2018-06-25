      <section id="main-content">
          <section class="wrapper site-min-height">

        <div class="top-content">
            
            <div class="inner-bg">
                <div class="container">
                    
                    <div class="row">
                        <div class="col-sm-5">
                            
                            <div class="form-box">
                                <div class="form-top">
                                    <div class="form-top-left">
                                        <h3>Mengunggah Dokumen Tugas Akhir</h3>
                                        <p style="margin-top: 30px;">Unggah file dalam format <strong>PDF</strong></p>
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
        </section>
    </section>
