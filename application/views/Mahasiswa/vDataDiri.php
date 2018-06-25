
      <section id="main-content">
          <section class="wrapper site-min-height">
            <h3>Melengkapi Data Diri</h3>
            <div class="top-content">
            
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-5">
                            
                            <div class="form-box">
                                <div class="form-top">
                                    <div class="form-top-left">
                                        <p style="margin-top: 30px; margin-left: -15px;">Silahkan lengkapi data diri anda di bawah ini !</p>
                                    </div>
                                </div>
                                <div class="form-bottom" style="margin-left: -15px;">
                                    <?= form_open('index.php/cMahasiswa/dataDiri') ?>
                                      <?php echo $this->session->flashdata('msg'); ?>
                                          <table>
                                              <tr>
                                                  <td>NIM</td>
                                                  <td width="600px" height="50px"><div class="form-group">
                                                  <input type="text" name="nim" placeholder="NIM..." class="form-nim form-control" id="  form-nim" style="margin-left: -80px;"></div></td>
                                              </tr>
                                              
                                              <tr>
                                                  <td width="500px" >Nama</td>
                                                  <td width="600px" height="50px"><div class="form-group">
                                                  <input type="text" name="nama" placeholder="Nama..." class="form-nama form-control" id="  form-nama" style="margin-left: -80px;"></div>
                                                  </td>
                                              </tr>
                                              
                                              <tr>
                                                  <td>Jurusan</td>
                                                  <td width="600px" height="50px"><div class="form-group">
                                                  <input type="text" name="jurusan" placeholder="Jurusan..." class="form-jurusan form-control" id="form-jurusan" style="margin-left: -80px;"></div></td>
                                              </tr>
                                              <tr>
                                                  <td>Angkatan</td>
                                                  <td width="600px" height="50px"><div class="form-group">
                                                  <input type="text" name="angkatan" placeholder="Angkatan..." class="form-angkatan form-control" id="  form-angkatan" style="margin-left: -80px;"></div></td>
                                              </tr>
                                              <tr>
                                                  <td>Email</td>
                                                  <td width="600px" height="50px"><div class="form-group">
                                                  <input type="text" name="email" placeholder="Email..." class="form-email form-control" id="  form-email" style="margin-left: -80px;"></div></td>
                                              </tr>
                                              <tr>
                                                  <td>NoHP</td>
                                                  <td width="600px" height="50px"><div class="form-group">
                                                  <input type="text" name="nohp" placeholder="NoHP..." class="form-nohp form-control" id="  form-nohp" style="margin-left: -80px;"></div></td>
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
        <!-- Top content -->
        