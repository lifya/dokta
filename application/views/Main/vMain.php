    <!-- About -->
    <section id="about" class="bg-light text-center">
      <div class="container container-custom-about">
        <h4>About <span style="color: #07294e;">DOKTA</span></h4>
        <br><br>
        <p align="justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,3
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
    </section>

    

    <!-- Bidang Ilmu -->
    <section id="konsentrasi" >
      <div class="container">
        <h4 class="text-center">Konsentrasi <span style="color: #07294e;">Bidang Ilmu</span></h4>  
        <br><br>       
        <div class="container-fluid">
          <div class="row">
            <div class="col-4">
              <h6 class="bg-heading text-center"><strong>Kecerdasan Buatan</strong></h6>
              <br>
              <?php 
              foreach ($B1 as $key ) {
              ?>
              <a href="<?php echo base_url('index.php/CTugasAkhir/detilTA/'.$key->nim) ?>">
                <h6 style="color: #07294e;"><b><?php echo $key->judul; ?></b></h6>
              </a>
              <p class="font-style-author"><b><?php echo $key->nama; ?></b></p>
              <p class="font-style-author">Tahun : <?php echo $key->tahun; ?></p>
              <p class="font-style-detil"><?php echo $key->namaBidangIlmu; ?> | <?php echo $key->namaSubjek; ?></p>
              <hr>
              <?php 
                }
              ?>

              <a href="<?php echo base_url('index.php/CTugasAkhir/B001') ?>" class="btn btn-navbar btn-custom"><strong>Load All</strong></a> 

              <br/><br/>
            </div>
            <div class="col-4">
              <h6 class="bg-heading text-center"><strong>Basis Data</strong></h6>
              <br>
              <?php 
              foreach ($B2 as $key ) {
              ?>
              <a href="<?php echo base_url('index.php/CTugasAkhir/detilTA/'.$key->nim) ?>">
                <h6 style="color: #07294e;"><b><?php echo $key->judul; ?></b></h6>
              </a>
              <p class="font-style-author"><b><?php echo $key->nama; ?></b></p>
              <p class="font-style-author">Tahun : <?php echo $key->tahun; ?></p>
              <p class="font-style-detil"><?php echo $key->namaBidangIlmu; ?> | <?php echo $key->namaSubjek; ?></p>
              <hr>
              <?php 
                }
              ?>
              <a href="<?php echo base_url('index.php/CTugasAkhir/B002') ?>" class="btn btn-navbar btn-custom"><strong>Load All</strong></a> 
            </div>
            <div class="col-4">
              <h6 class="bg-heading text-center"><strong>Jaringan Komputer</strong></h6>
              <br>
              <?php 
              foreach ($B3 as $key ) {
              ?>
              <a href="<?php echo base_url('index.php/CTugasAkhir/detilTA/'.$key->nim) ?>">
                <h6 style="color: #07294e;"><b><?php echo $key->judul; ?></b></h6>
              </a>
              <p class="font-style-author"><b><?php echo $key->nama; ?></b></p>
              <p class="font-style-detil">Tahun : <?php echo $key->tahun; ?></p>
              <p class="font-style-detil"><?php echo $key->namaBidangIlmu; ?> | <?php echo $key->namaSubjek; ?></p>
              <hr>
              <?php 
                }
              ?>
              <a href="<?php echo base_url('index.php/CTugasAkhir/B003') ?>" class="btn btn-navbar btn-custom"><strong>Load All</strong></a> 
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Subjek -->
    <section>
      
    </section>

