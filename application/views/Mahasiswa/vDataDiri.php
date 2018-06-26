    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Melengkapi Data Diri</li>
      </ol>
      <div class="container-tab-nav">
        <div class="inner-bg">
          <div class="container">
            <div class="row">
              <div class="col-sm-9">
                <div class="form-box">
                  <div class="form-top">
                    <div class="form-top-left">
                       <p>Silahkan lengkapi data diri anda di bawah ini !</p>
                    </div>
                  </div>
                  <div class="form-bottom">
                    <?= form_open('index.php/cMahasiswa/dataDiri') ?>
                    <?php echo $this->session->flashdata('msg'); ?>
                    <table>
                      <tr>
                        <td>NIM</td>
                        <td width="600px" height="50px"><div class="form-group">
                        <input type="text" name="nim" placeholder="NIM..." class="form-nim form-control" id="  form-nim"></div></td>
                      </tr>
                                                
                      <tr>
                        <td width="300px" >Nama</td>
                        <td width="1000px" height="50px">
                          <div class="form-group">
                            <input type="text" name="nama" placeholder="Nama..." class="form-nama form-control" id="  form-nama">
                          </div>
                        </td>
                      </tr>
                                                
                      <tr>
                        <td>Jurusan</td>
                        <td width="600px" height="50px">
                          <div class="form-group">
                            <input type="text" name="jurusan" placeholder="Jurusan..." class="form-jurusan form-control" id="form-jurusan">
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>Angkatan</td>
                        <td width="600px" height="50px">
                          <div class="form-group">
                            <input type="text" name="angkatan" placeholder="Angkatan..." class="form-angkatan form-control" id="  form-angkatan">
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>Email</td>
                        <td width="600px" height="50px">
                          <div class="form-group">
                            <input type="text" name="email" placeholder="Email..." class="form-email form-control" id="  form-email">
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>NoHP</td>
                        <td width="600px" height="50px">
                          <div class="form-group">
                            <input type="text" name="nohp" placeholder="NoHP..." class="form-nohp form-control" id="  form-nohp">
                          </div>
                        </td>
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
        