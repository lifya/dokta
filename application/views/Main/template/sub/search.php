    <!-- search -->
    <section id="search">
        <div class="container-fluid">
          <div class="row">
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