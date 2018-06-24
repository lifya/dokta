<?php  ?>
<section>
	<div class="container container-add">
		<?php 
          foreach ($B3 as $key ) {
        ?>
		<div>
			<a href="<?php echo base_url('index.php/CTugasAkhir/detilTA/'.$key->nim) ?>">
				<h5 style="color: #07294e;"><b><?php echo $key->judul; ?></b></h5>
			</a>
            <p class="font-style-author-dta"><?php echo $key->nama; ?></p>
            <p class="font-style-detil-dta"><?php echo $key->tahun; ?></p>
            <p class="font-style-detil-dta"><?php echo $key->namaBidangIlmu; ?></p>
            <p class="font-style-pdf"><i class="fa fa-file-pdf-o"></i> PDF</p>
            <hr>
		</div>
		<?php 
          }
        ?>

	</div>
</section>