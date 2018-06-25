<section id="main-content">
    <section class="wrapper site-min-height">
            <h3>Mengisi Informasi Tugas Akhir</h3>
            <div class="top-content">
            
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-5">
                            
                            <div class="form-box">
                                <div class="form-top">
                                    <div class="form-top-left">
                                        <p style="margin-top: 30px; margin-left: -15px;">Silahkan lengkapi data informasi tugas akhir anda di bawah ini !</p>
                                    </div>
                                </div>
                                <div class="form-bottom" style="margin-left: -15px;">
                                <?= form_open('index.php/cMahasiswa/detilTA') ?>
                                      <?php echo $this->session->flashdata('msg'); ?>
                                        <table>
                                              <tr>
                                                  <td width="500px" >Judul</td>
                                                  <td width="600px" height="50px"><div class="form-group">
                                                  <input type="text" name="judul" placeholder="Judul..." class="form-judul form-control" id="  form-judul" style="margin-left: -30px;"></div>
                                                  </td>
                                              </tr>
                                              <tr>
                                                  <td>Bidang Ilmu</td>
                                                  <td width="600px" height="50px"><div class="form-group">
                                                  <select id="Bidang-ilmu" name="bidangilmu" style="width: 200px; height: 40px; margin-left: -30px;">
                                                  <option value="basis_data">Basis Data</option>
                                                  <option value="kecerdasan_buatan">Kecerdasan Buatan</option>
                                                  <option value="jaringan">Jaringan</option>
                                                  </select></div>
                                                  </td>
                                              </tr>
                                              <tr>
                                                  <td>Subjek</td>
                                                  <td width="600px" height="50px"><div class="form-group">
                                                  <select id="subjek" name="subjek" style="width: 200px; height: 40px; margin-left: -30px;">
                                                  <option value="nlp">Pemrosesan Bahasa Alami</option>
                                                  <option value="citra" >Pengolahan Citra</option>
                                                  <option value="game">Oemrograman Game</option>
                                                  </select></div>
                                                  </td>
                                              </tr>
                                              <tr>
                                                  <td>Tahun</td>
                                                  <td width="600px" height="50px"><div class="form-group">
                                                  <input type="text" name="tahun" placeholder="Tahun..." class="form-tahun form-control" id="form-tahun" style="margin-left: -30px;"></div></td>
                                              </tr>
                                              <tr>
                                                  <td>Nama Pembimbing 1</td>
                                                  <td width="600px" height="50px"><div class="form-group">
                                                  <input type="text" name="dosenpembimbing1" placeholder="nama Pembimbing1..." class="form-nama-pembimbing form-control" id="  form-nama-pembimbing" style="margin-left: -30px;"></div></td>
                                              </tr>
                                              <tr>
                                                  <td>Nama Pembimbing 2</td>
                                                  <td width="600px" height="50px"><div class="form-group">
                                                  <input type="text" name="dosenpembimbing2" placeholder="nama Pembimbing2..." class="form-nama-pembimbing form-control" id="  form-nama-pembimbing" style="margin-left: -30px;"></div></td>
                                              </tr>
                                              <tr>
                                                  <td>Abstrak</td>
                                                  <td width="600px" height="50px"><div class="form-group">
                                                  <input type="text" name="abstrak" placeholder="Abstrak..." class="form-abstrak form-control" id="form-abstrak" style="margin-left: -30px;"></div></td>
                                              </tr>
                                          </table>
                                       
                                          <input type="submit" name="simpan" class="btn btn-info" value="Simpan" style="background: #07294e ; border-color: #ffc600;">

                                    <?= form_close() ?>
                                </div>
                            </div>
                            
                        </div>
                        
                    </div>
                    
                </div>
            </div>
            
        </div>
    </section>
</section>