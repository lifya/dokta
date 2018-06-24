<!-- detil tugas akhir -->

<div class="container container-tab-nav">
  <?php 
    foreach ($detilTA as $key ) {
  ?>
  <h4 style="color: #07294e;"><?php echo $key->judul; ?></h4>
  <p><strong><?php echo $key->namaBidangIlmu; ?> | <?php echo $key->namaSubjek; ?></strong></p>
  <div id="content">
	  <ul class="nav nav-tabs">
	    <li class="nav-item">
	      <a class="nav-link active" href="#abstrak" data-toggle="tab">Abstrak</a>
	    </li>
	    <li class="nav-item">
	      <a class="nav-link" href="#penulis" data-toggle="tab">Penulis</a>
	    </li>
	    <li class="nav-item">
	      <a class="nav-link" href="#dosenPembimbing" data-toggle="tab">Dosen Pembimbing</a>
	    </li>
	  </ul>
	  <div id="my-tab-content" class="tab-content">
		<div class="tab-pane active" id="abstrak">
		  <h6>Abstrak</h6>
		  <p align="justify" style="text-indent: 0.4in;"><?php echo $key->abstrak; ?></p>
		  <p>kata kunci : lorem, ipsum, ut, labore</p>
		  <p class="p-margin"><strong>Tahun : </strong> <?php echo $key->tahun; ?></p>
		  <a href="" class="icon-red"><i class="fa fa-file-pdf-o "></i><b> Full Text PDF</b> </a>
		  <p></p>
		</div>
		<div class="tab-pane" id="penulis">
          <div class="panel panel-info">
            <div class="panel-heading">
              <h6 class="panel-title"><?php echo $key->nama; ?></h6>
            </div>
            <div class="panel-body">
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>NIM</td>
                        <td><?php echo $key->nim; ?></td>
                      </tr>
                      <tr>
                        <td>Jurusan</td>
                        <td><?php echo $key->jurusan; ?></td>
                      </tr>
                      <tr>
                        <td>Angkatan</td>
                        <td><a href="mailto:info@support.com"></a><?php echo $key->angkatan; ?></td>
                      </tr>
                        <td>Email</td>
                        <td><?php echo $key->email; ?></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
		</div>
		<div class="tab-pane" id="dosenPembimbing">
		  <div class="panel panel-info">
        <div class="panel-heading">
          <h6 class="panel-title">Dosen Pembimbing 1</h6>
        </div>
        <div class="panel-body">
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Nama</td>
                        <td>Suherman</td>
                      </tr>
                      <tr>
                        <td>NIP</td>
                        <td>09021181520023</td>
                      </tr>
                      <tr>
                        <td>Email</td>
                        <td>info@support.com</td>
                      </tr>
                        <td>Alamat</td>
                        <td>Simpang Alam</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
          </div>
        <div class="panel-heading">
          <h6 class="panel-title">Dosen Pembimbing 2</h6>
        </div>
        <div class="panel-body">
          <div class=" col-md-9 col-lg-9 "> 
            <table class="table table-user-information">
              <tbody>
                <tr>
                  <td>Nama</td>
                  <td>Suherman</td>
                </tr>
                <tr>
                  <td>NIP</td>
                  <td>09021181520023</td>
                </tr>
                <tr>
                  <td>Email</td>
                  <td>info@support.com</td>
                </tr>
                  <td>Alamat</td>
                  <td>Simpang Alam</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
		  </div>
	  </div>
  </div>
  <?php 
    }
  ?>
</div>