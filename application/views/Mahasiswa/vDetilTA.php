<!DOCTYPE html>
<html>
<head>
	<title>Data Diri</title>
</head>
 <body> 
        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                	
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1>Publikasikan Tugas Akhir Kamu di Sini !!!</h1>
<!--                             <div class="description">
                            	<p>
	                            	This is a free responsive <strong>"login and register forms"</strong> template made with Bootstrap. 
	                            	Download it on <a href="http://azmind.com" target="_blank"><strong>AZMIND</strong></a>, 
	                            	customize and use it as you like!
                            	</p>
                            </div> -->
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-sm-5">
                            
                            <div class="form-box">
                                <div class="form-top">
                                    <div class="form-top-left">
                                        <h3>Mengisi Informasi Tugas Akhir</h3>
                                    </div>
                                </div>
                                <div class="form-bottom">
                                    <form role="form" action="" method="post" class="registration-form">
                                        <div class="form-group">
                                            <label class="sr-only" for="form-name">Judul</label>
                                            <input type="text" name="form-name" placeholder="Name..." class="form-name form-control" id="form-name">
                                        </div>
                                        <div class="form-group">
                                            <!-- <label class="sr-only" for="form-nim">Bidang Ilmu</label> -->
                                            <select id="Bidang-ilmu" style="width: 350px; height: 40px;">
                                            <option nama="agama">Bidang Ilmu</option>
                                            <option nama="agama" value="Kecerdasan Buatan">Kecerdasan Buatan</option>
                                            <option nama="Tingkat" value="Jaringan">Jaringan</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="sr-only" for="form-jurusan">Tahun</label>
                                            <input type="text" name="form-jurusan" placeholder="Jurusan..." class="form-jurusan form-control" id="form-jurusan">
                                        </div>
                                        <div class="form-group">
                                            <label class="sr-only" for="form-angkatan">Nama Pembimbing</label>
                                            <input type="text" name="form-angkatan" placeholder="Angkatan..." class="form-angkatan form-control" id="form-angkatan">
                                        </div>
                                        <div class="form-group">
                                            <label class="sr-only" for="form-email">Abstrak</label>
                                            <input type="text" name="form-email" placeholder="Email..." class="form-email form-control" id="form-email">
                                        </div>
<!--                                         <div class="form-group">
                                            <label class="sr-only" for="form-about-yourself">About yourself</label>
                                            <textarea name="form-about-yourself" placeholder="About yourself..." 
                                                        class="form-about-yourself form-control" id="form-about-yourself"></textarea>
                                        </div> -->
                                        </button>
                                        <a href="<?= base_url('index.php/cMahasiswa/unggah') ?>"><button type="submit" class="button" style=" margin-bottom:435px; margin-top: 55px; margin-right:-100px;">Selanjutnya
                                        </a>
                                        </button>
                                    </form>
                                </div>
                            </div>
                            
                        </div>
                        
                    </div>
                    
                </div>
            </div>
            
        </div>

    </body>
</html>