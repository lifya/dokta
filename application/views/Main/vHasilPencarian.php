<?php  ?>
<section>
	<div class="container container-add">
		<?php 
          foreach ($search as $key ) {
        ?>
		<div>
			<a href="<?php echo base_url('index.php/CTugasAkhir/detilTA/'.$key->nim) ?>">
				<h5 style="color: #07294e;"><b><?php echo $key->judul; ?></b></h5>
			</a>
            <p class="font-style-author-dta"><b><?php echo $key->nama; ?></b></p>
            <p class="font-style-detil-dta">Tahun : <?php echo $key->tahun; ?></p>
            <p class="font-style-detil-dta"><?php echo $key->namaBidangIlmu; ?> | <?php echo $key->namaSubjek; ?></p>
            <a href="<?php echo base_url('index.php/cTugasAkhir/tampilPDF/'."$key->nim") ?>" class="icon-red"><p class="font-style-pdf"><i class="fa fa-file-pdf-o"></i> PDF</p></a>
            <hr>
		</div>
		<?php 
          }
        ?>

	</div>
</section>