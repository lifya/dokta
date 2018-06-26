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
                                        <p>Silahkan lengkapi data informasi tugas akhir anda di bawah ini !</p>
                                    </div>
                                </div>
                                <div class="form-bottom">
                                <?= form_open('index.php/cMahasiswa/detilTA') ?>
                                      <?php echo $this->session->flashdata('msg'); ?>
                                        <table>
                                              <tr>
                                                  <td width="600px" >Judul</td>
                                                  <td width="600px" height="50px"><div class="form-group">
                                                  <input type="text" name="judul" placeholder="Judul..." class="form-judul form-control" id="form-judul"></div>
                                                  </td>
                                              </tr>
                                              <tr>
                                                  <td>Bidang Ilmu</td>
                                                  <td width="600px" height="50px"><div class="form-group">
                                                  <select id="Bidang-ilmu" name="bidangilmu">
                                                  <option value="basis_data">Basis Data</option>
                                                  <option value="kecerdasan_buatan">Kecerdasan Buatan</option>
                                                  <option value="jaringan">Jaringan</option>
                                                  </select></div>
                                                  </td>
                                              </tr>
                                              <tr>
                                                  <td>Subjek</td>
                                                  <td width="600px" height="50px"><div class="form-group">
                                                  <select id="subjek" name="subjek">
                                                  <option value="nlp">Pemrosesan Bahasa Alami</option>
                                                  <option value="citra" >Pengolahan Citra</option>
                                                  <option value="game">Oemrograman Game</option>
                                                  </select></div>
                                                  </td>
                                              </tr>
                                              <tr>
                                                  <td>Tahun</td>
                                                  <td width="600px" height="50px"><div class="form-group">
                                                  <input type="text" name="tahun" placeholder="Tahun..." class="form-tahun form-control" id="form-tahun"></div></td>
                                              </tr>
                                              <tr>
                                                  <td>Dosen Pembimbing 1</td>
                                                  <td width="600px" height="50px"><div class="form-group">
                                                  <input type="text" name="dosenpembimbing1" placeholder="nama Pembimbing1..." class="form-nama-pembimbing form-control" id="  form-nama-pembimbing"></div></td>
                                              </tr>
                                              <tr>
                                                  <td>Dosen Pembimbing 2</td>
                                                  <td width="600px" height="50px"><div class="form-group">
                                                  <input type="text" name="dosenpembimbing2" placeholder="nama Pembimbing2..." class="form-nama-pembimbing form-control" id="  form-nama-pembimbing"></div></td>
                                              </tr>
                                              <tr>
                                                  <td>Abstrak</td>
                                                  <td width="600px" height="50px"><div class="form-group">
                                                  <input type="text" name="abstrak" placeholder="Abstrak..." class="form-abstrak form-control" id="form-abstrak"></div></td>
                                              </tr>
                                          </table>
                                       
                                          <input type="submit" name="simpan" class="btn btn-info" value="Simpan" style="background: #07294e ; border-color: #ffc600;">

                                    <?= form_close() ?>
                                    <br>
                                </div>
                            </div>
                            
                        </div>
                        
                    </div>
                    
                </div>
            </div>
      </div>  
    </div>
            
            