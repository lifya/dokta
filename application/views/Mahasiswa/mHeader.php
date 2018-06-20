<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
    <head>
        <title>COSMIC</title>
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" /> <!-- Complete CSS -->                                  
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/stylesheet.css">                                                                      <!-- Jenis huruf berubah -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> <!-- JQuery -->   
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> <!-- Complete JavaScript -->
    </head>
<!-- link websitenya http://getbootstrap.com/components/#navbar -->
<!-- Navbar default, Navbar adalah komponen meta responsif yang-
     -berfungsi sebagai "header navigasi/kepala halaman yang berfungsi kelanjutan"-
     -untuk aplikasi atau situs Anda. Mereka mulai runtuh (dan dapat diganti-
     -dalam tampilan seluler dan menjadi horizontal karena lebar viewport yang-
     -tersedia meningkat -->
<div class="navbar navbar-default navbar-fixed-top" role="navigation" id="myNavbar"> 
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display/
         Merek dan toggle dikelompokkan untuk tampilan mobile yang lebih baik -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <div class=navbar-brand>COSMIC</div>
      <!-- menampilkan "Toko Online" yang terletak di sisi paling kanan --> 
    </div>

    <!-- Collect the nav links, forms, and other content for toggling/
         Kumpulkan link nav, form, dan konten lainnya untuk Toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        
      <ul class="nav navbar-nav navbar-right"> <!-- style membuat perintah yang dimunculkan diletakkan dikepojok kanan -->
        <li><?php echo anchor(base_url(), 'Home');?></li> <!-- menampilkan "Home" dengan fungsi kelanjutan ke- 
        -base_url/http://localhost/toko-online2/ -->
        <li><?php echo anchor(base_url(), 'Kategori');?></li>
        <?php if($this->session->userdata('username2')) { ?>
            <li><?php echo anchor('customer/payment_confirmation', 'Payment Confirmation');?></li>
            <!-- menampilkan "Payment Confirmation" berfungsi kelanjutan yang menuju controller "customer" ke function "payment_confirmation" -->
            <li><?php echo anchor('customer/shopping_history', 'History');?></li>
            <!-- menampilkan "History" berfungsi kelanjutan yang menuju controller "customer" ke function "shopping_history" -->
        <?php } ?>
        <li>
            <?php
                $text_cart_url  = '<span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>';
                //"glyphicon glyphicon-shopping-cart" menambahkan icon "shop/keranjang belanjaan" 
                $text_cart_url .= ' Inside Cart: '. $this->cart->total_items() .' items';
                //menampilkan "Inside Cart:" disamping icon shop yang berarti "masukan keranjang belanjaan"
                //"$this->cart->total_items()" menampilkan "bilangan bulat/1.."-
                //-yang menyatakan jumlah masukan keranjang belanjaan-
                //Menampilkan jumlah item dalam gerobak, dengan menambahkan 'cart'-
                //-pada config autoload libraries maka dia akan menampilkan 0 sampai-
                //-ada add shop baru terisi dan angka berubah sesuai isi kranjang shop
            ?>
            <?=anchor('welcome/cart', $text_cart_url)?> 
            <!-- pelengkap menampilkan "Inside Cart ... items",-
                menggunakan variabel "$text_cart_url" penampung data yang di atasnya -->
            <!-- fungsi kelanjutan ketika meng klik "Inside Cart ... items" -->
            <!-- "<=anchor('welcome/cart'", berfungsi menyediakan fungsi kelanjutan-
             -yang nanti di arahkan ke controller "welcome" pada function "cart" -->
             <!-- yang meng akses controller "welcome" pada function "cart" -->
        </li>
        <?php if($this->session->userdata('username2')) { ?> <!-- kondisi dimana sedang login -->
            <li>
                <div style="line-height:50px;">You Are : <?=$this->session->userdata('username2')?></div>
                <!-- "(style="line-height:50px;")" spasi vertikal/tegak lurus satuan pixel "50px" -->
                <!-- menampilkan "You Are : " -->
                <!-- "<=$this->session->userdata('username2')?>" berfungsi menampilkan "username2" pada database -->
            </li>
            <li>
                <?php echo anchor('logout', 'Logout');?> <!-- menampilkan "Logout" dengan dapat diklik/fungsi-
                                                              -kelanjutan menujut ke controller "logout" -->
            </li>
        <?php } else { ?> <!-- kondisi dimana sedang logout -->
            <li>
                <?php echo anchor('register', 'Register');?> <!-- menampilkan "Register" dengan dapat diklik/fungsi-
                                                            -kelanjutan menujut ke controller "register" -->
            </li>
            <li>
                <?php echo anchor('login', 'Login');?> <!-- menampilkan "Login" dengan dapat diklik/fungsi-
                                                            -kelanjutan menujut ke controller "login" -->
            </li>            
        <?php } ?>
      </ul>
        
    </div><!-- /.navbar-collapse/Navbar-runtuh -->
  </div><!-- /.container-fluid/Wadah-cairan -->
</div>