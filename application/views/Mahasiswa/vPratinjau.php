    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Pratinjau</li>
      </ol>
      <?php 
        foreach ($pratinjau as $key ) {
      ?>
      <div class="pull-right" id="btn-<?= $key->nim?>">
          <div>
             <?php if ($key->status == 'delivered'): ?>
              <button class="btn btn-sm btn-success" disabled>Edit</button>
              <?php else :?>
              <button class="btn btn-sm btn-success">Edit</button>
              <?php endif ?> 
              
             <?php if ($key->status == 'none'): ?>
              <button onclick="changeStatus('<?= $key->nim ?>')" class=" btn btn-sm btn-secondary"></i>Kirim  </button>
              <?php elseif ($key->status == 'delivered'): ?>
              <button onclick="changeStatus('<?= $key->nim ?>')" class="btn btn-sm btn-success">Terkirim</button>
              <?php elseif ($key->status == 'confirmed'): ?>
              <button onclick="changeStatus('<?= $key->nim ?>')" class="btn btn-sm btn-success" disabled>Sudah Dikonfirmasi </button>
              <?php endif; ?> 
          </div>
          
      </div>
      <br><br>
      <div class="container-tab-nav">
        
        <h4 ><?php echo $key->judul; ?></h4>
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
            <a href="<?php echo base_url('index.php/cTugasAkhir/tampilPDF/'."$key->nim") ?>" class="icon-red"><i class="fa fa-file-pdf-o "></i><b> Full Text PDF</b> </a>
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
                        <td>NIM:</td>
                        <td><?php echo $key->nim; ?></td>
                      </tr>
                      <tr>
                        <td>Jurusan:</td>
                        <td><?php echo $key->angkatan; ?></td>
                      </tr>
                      <tr>
                        <td>Angkatan</td>
                        <td><?php echo $key->jurusan; ?></td>
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

    <script>
      $(document).ready(function() {
        $('#dataTables-example').DataTable({
         responsive: true
        });
      });

      function changeStatus(nim) {
        $.ajax({
          url: '<?= base_url('index.php/cMahasiswa/pratinjau') ?>',
          type: 'POST',
          data: {
            nim: nim,
            status: true
          },
          success: function(response) {
            $('#btn-' + nim).html(response);
          },
          rror: function (e) {
            onsole.log(e.responseText);
          }
        });
      }
    </script>
        
      