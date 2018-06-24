
      <section id="main-content">
          <section class="wrapper site-min-height">
            <h3 style="margin-left: 50px;">Melengkapi Data Diri</h3>
            <div class="top-content">
            
            <div class="inner-bg">
                <div class="container">
                    
                    <!-- <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1>Publikasikan Tugas Akhir Kamu di Sini !!!</h1>
                            <div class="description">
                                <p>
                                    This is a free responsive <strong>"login and register forms"</strong> template made with Bootstrap. 
                                    Download it on <a href="http://azmind.com" target="_blank"><strong>AZMIND</strong></a>, 
                                    customize and use it as you like!
                                </p>
                            </div>
                        </div>
                    </div> -->
                    
                    <div class="row">
                        <div class="col-sm-5">
                            
                            <div class="form-box">
                                <div class="form-top">
                                    <div class="form-top-left">
                                        <p style="margin-top: 50px; margin-left: -167px;">silahkan lengkapi data diri anda di bawah ini !</p>
                                    </div>
                                </div>
                                <div class="form-bottom" style="margin-left: -167px;">
                                    <?= form_open('index.php/cMahasiswa/dataDiri') ?>
                                      <?php echo $this->session->flashdata('msg'); ?>
                                          <table>
                                              <tr>
                                                  <td>NIM</td>
                                                  <td width="600px" height="50px"><div class="form-group">
                                                  <input type="text" name="nim" placeholder="NIM..." class="form-nim form-control" id="  form-nim" style="margin-left: -150px;"></div></td>
                                              </tr>
                                              
                                              <tr>
                                                  <td width="500px" >Nama</td>
                                                  <td width="600px" height="50px"><div class="form-group">
                                                  <input type="text" name="nama" placeholder="Nama..." class="form-nama form-control" id="  form-nama" style="margin-left: -150px;"></div>
                                                  </td>
                                              </tr>
                                              
                                              <tr>
                                                  <td>Jurusan</td>
                                                  <td width="600px" height="50px"><div class="form-group">
                                                  <input type="text" name="jurusan" placeholder="Jurusan..." class="form-jurusan form-control" id="form-jurusan" style="margin-left: -150px;"></div></td>
                                              </tr>
                                              <tr>
                                                  <td>Angkatan</td>
                                                  <td width="600px" height="50px"><div class="form-group">
                                                  <input type="text" name="angkatan" placeholder="Angkatan..." class="form-angkatan form-control" id="  form-angkatan" style="margin-left: -150px;"></div></td>
                                              </tr>
                                              <tr>
                                                  <td>Email</td>
                                                  <td width="600px" height="50px"><div class="form-group">
                                                  <input type="text" name="email" placeholder="Email..." class="form-email form-control" id="  form-email" style="margin-left: -150px;"></div></td>
                                              </tr>
                                              <tr>
                                                  <td>NoHP</td>
                                                  <td width="600px" height="50px"><div class="form-group">
                                                  <input type="text" name="nohp" placeholder="NoHP..." class="form-nohp form-control" id="  form-nohp" style="margin-left: -150px;"></div></td>
                                              </tr>
                                          </table>
                                        
                                        <!-- <input type="submit" class="button" name="simpan" style=" margin-bottom:  370px; margin-top: 55px; margin-right:-100px;"> -->

                                        <input type="submit" name="simpan" class="btn btn-info" value="Simpan">
                                          
                                        
                                        
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
        