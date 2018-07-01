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
                                        <label for="Upload Dokumen">Unggah Dokumen <span class="required">* .pdf</span></label>
                                    </div>
                                </div>

                                <?= form_open('index.php/cMahasiswa/Unggah') ?>
                                    <?php echo $this->session->flashdata('msg'); ?>
                                    <table>
                                        <tr>
                                            <td>
                                                <input type="file" name="upload" required>
                                            </td>
                                            <td>
                                                <input type="submit" name="simpan" class="btn btn-info" value="Simpan" style="background: #07294e ; border-color: #ffc600;">
                                            </td>
                                        </tr>
                                    </table>
                                
                                <?= form_close() ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
      </div>
    </div>
