    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="<?=base_url('index.php/cMahasiswa')?>">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Tanggapan</li>
      </ol>
      <div class="container-tab-nav">
       <?= form_open_multipart('index.php/cMahasiswa/tanggapan') ?>
      	<?= $this->session->flashdata('msg') ?>
       <?= form_close() ?>
      </div>
    </div>
