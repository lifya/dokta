    <div class="container-fluid">
          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Tugas Akhir</li>
          </ol>

          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="text-align: justify;" id="mydata">
                <thead style="text-align: center;">
                  <tr>
                  <th>NIM</th>
                  <th>Judul TA</th>
                  <th>Aksi</th>
                  </tr>
                </thead>
                <tbody id="show_data">
                  <?php foreach ($dataTA as $key) {?>
                  <tr>
                  <td width="30px"><?= $key->nim ?></td>
                  <td width="650px"><?= $key->judul ?></td>
                  <td id="btn-<?= $key->nim?>" style="text-align: center;">
                    <button class="btn btn-sm btn-success" style="background-color: #07294e;"> Edit </button>

                    <?php if ($key->status == 'delivered'): ?>
                    <button onclick="changeStatus('<?= $key->nim ?>')" class=" btn btn-sm btn-danger"></i> Konfirmasi </button>
                    <?php elseif ($key->status == 'confirmed'): ?>
                    <button onclick="changeStatus('<?= $key->nim ?>')" class="btn btn-sm btn-success">Terkonfirmasi </button>
                    <?php endif; ?>
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