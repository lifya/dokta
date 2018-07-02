    <div class="container-fluid">
          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Tugas Akhir</li>
          </ol>
          <?= $this->session->flashdata('msg') ?>
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="text-align: justify;" id="mydata">
                <thead style="text-align: center;">
                  <tr>
                  <th>NIM</th>
                  <th>Nama</th>
                  <th>Judul Tugas Akhir</th>
                  <th>Aksi</th>
                  <th>Aksi</th>
                  <th>Detail</th>
                  </tr>
                </thead>
                <tbody id="show_data">
                  <?php foreach ($dataTA as $key) {?>
                  <tr>
                    <td><?= $key->nim ?></td>
                    <td><?= $key->nama ?></td>
                    <td width="500px"><?= $key->judul ?></td>
                    <td id="btn-<?= $key->nim?>">
                      <?php if ($key->status == 'delivered'): ?>
                      <button onclick="changeStatus('<?= $key->nim ?>')" class=" btn btn-sm btn-secondary"></i> Konfirmasi</button>
                      <?php elseif ($key->status == 'confirmed'): ?>
                      <button onclick="changeStatus('<?= $key->nim ?>')" class="btn btn-sm btn-success">Terkonfirmasi</button>
                      <?php endif; ?>
                    </td>
                    <td>
                      <?php if($key->status == 'confirmed'): ?>
                        <button class="btn btn-sm btn-danger" disabled>Tolak</button>
                      <?php else : ?>
                        <a href="<?= base_url('index.php/cAdmin/reject_tugasAkhir/'.$key->nim) ?>" class="btn btn-sm btn-danger">Tolak</a>
                      <?php endif; ?>
                    </td>
                    <td>
                      <a href="<?= base_url('index.php/cAdmin/detilTA/'.$key->nim) ?>" class="btn btn-sm btn-info">Lihat</a> 
                    </td>
                  </tr>
                  <?php } ?>
                      
                </tbody>
            </table>
          </div>
    </div>  
    <script>
      $(document).ready(function() {
        $('#dataTables-example').DataTable({
         responsive: true
        });
      });

      function delete_data(nim) {
        $.ajax({
          url: '<?= base_url('index.php/cAdmin/tugasAkhir') ?>',
          type: 'POST',
          data: {
            nim: nim,
            delete: true
          },
            success: function() {
            window.location = '<?= base_url('index.php/cAdmin/tugasAkhir') ?>';
          }
        });
      }

      function changeStatus(nim) {
        $.ajax({
          url: '<?= base_url('index.php/cAdmin/tugasAkhir') ?>',
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