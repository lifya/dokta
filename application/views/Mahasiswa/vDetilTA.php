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
                                                  <input type="text" name="judul" placeholder="Judul..." class="form-control" value="<?= $ta->judul ?>" required></div>
                                                  </td>
                                              </tr>
                                              <tr>
                                                  <td>Subjek</td>
                                                  <td width="600px" height="50px"><div class="form-group">
                                                  <?php  
                                                  $opt = [];
                                                  foreach ( $datasubjek as $row ) $opt[$row->idSubjek] = $row->namaSubjek;
                                                  echo form_dropdown( 'idSubjek', $opt, $ta->idSubjek, [ 'id' => 'datasubjek1', 'class' => 'form-control' ] );
                                                  ?>
                                                  </div>
                                                  </td>
                                              </tr>
                                              <tr>
                                                  <td>Tahun</td>
                                                  <td width="600px" height="50px"><div class="form-group">
                                                  <input type="text" name="tahun" placeholder="Tahun..." class="form-control"  value="<?= $ta->tahun ?>" required></div></td>
                                              </tr>
                                              <tr>
                                                  <td>Dosen Pembimbing 1</td>
                                                  <td width="600px" height="50px"><div class="form-group">
                                                  <?php  
                                                  $opt = [];
                                                  foreach ( $dosen as $row ) $opt[$row->nip] = $row->nama;
                                                  echo form_dropdown( 'dosenPembimbing1', $opt, $ta->dosenPembimbing1, [ 'id' => 'dosen1', 'class' => 'form-control' ] );
                                                  ?>
                                                </div></td>
                                              </tr>
                                              <tr>
                                                  <td>Dosen Pembimbing 2</td>
                                                  <td width="600px" height="50px"><div class="form-group">
                                                  <?php  
                                                  $opt = [];
                                                  foreach ( $dosen as $row ) $opt[$row->nip] = $row->nama;
                                                  echo form_dropdown( 'dosenPembimbing2', $opt, $ta->dosenPembimbing2, [ 'id' => 'dosen2', 'class' => 'form-control' ] );
                                                  ?>
                                                </div></td>
                                              </tr>
                                              <tr>
                                                  <td>Abstrak</td>
                                                  <td width="600px" height="50px"><div class="form-group">
                                                  <textarea class="form-control" placeholder="Abstrak..." name="abstrak" required><?= $ta->abstrak ?></textarea>
                                                </div></td>
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
            
            