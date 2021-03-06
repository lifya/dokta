    <!-- Home -->
    <section id="home">
        <div class="overlay"></div>
        <div class="container-fluid">
          <div class="row">
            <div class="col-xl-9 mx-auto">
              <h1 style="color: white;" >Dokumentasi Tugas Akhir</h1>
              <h9 style="color: white;"><b>Fakultas Ilmu Komputer | Teknik Informatika | Referensi Tugas Akhir | Dokumentasi</b></h9>
            </div>
            <div class="col-xl-9 mx-auto margin-top-20">
              <a href="<?php echo base_url('index.php/cLogin') ?>" class="btn btn-size btn-custom-big"><b>Publikasikan Tugas Akhir Kamu</b></a> 
            </div>
            <div class="col-md-12 col-lg-10 col-xl-9 mx-auto">
              <div class="container box color padding-32">
                <?= form_open_multipart('index.php/cTugasAkhir/hasilPencarian') ?>
                  <div class="form-row">
                    <div class="col-12 col-md-9 mb-2 mb-md-0">
                      <input type="text" name="keyword" class="form-control form-control-custom" placeholder="masukkan kata kunci...">
                    </div>
                    <div class="col-12 col-md-3">
                      <button type="submit" class="btn btn-block btn-size btn-custom"><b>Cari</b></button>
                    </div>
                  </div>
                <?= form_close() ?>
              </div>
            </div>
          </div>
        </div>
    </section>

    