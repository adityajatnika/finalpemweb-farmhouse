<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <!-- icon -->
        <link rel="icon" type="image/png" href="Gambar/icons/favicon1.ico"/>
        <!-- CSS only -->
        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous"> -->
        <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
        <!-- ICON -->
        <link rel="stylesheet" type="text/css" href="vendor/lineawesome/css/line-awesome.min.css">
        <!-- JS -->
        <script src="js/javascript.js" type="text/javascript"></script>
        <script src="js/angular-1.7.5/angular.min.js" type="text/javascript"></script>
        <script>
            function btn1(){
                var rd1 = document.getElementById("rd1");
                var rd2 = document.getElementById("rd2");
                var rd3 = document.getElementById("rd3");
                var rd4 = document.getElementById("rd4");
                var jumlah = document.getElementById("jumlah").value;
                if (rd1.checked == true){
                    document.getElementById("cetak").innerHTML = jumlah *= rd1.value;
                } else if (rd2.checked == true){
                    document.getElementById("cetak").innerHTML = jumlah *= rd2.value;
                }else if (rd3.checked == true){
                    document.getElementById("cetak").innerHTML = jumlah *= rd3.value;
                }else if (rd4.checked == true){
                    document.getElementById("cetak").innerHTML = jumlah *= rd4.value;
                }
            }
        </script>
        <!-- CSS ORI -->
        <link rel="stylesheet" href="css/StelPemesanan.css">
        <!-- NAVBAR -->
        <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
        <link rel="stylesheet" href="css/navbar.css">
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/owl.theme.default.min.css">

        <!-- JQuery  -->
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="/resources/demos/style.css">
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

        <script>
            $( function() {
                $( "#datepicker" ).datepicker();
            } );
        </script>

        <title>Pemesanan</title>
    </head>
    <body>
        <!-- loader  -->
      <!-- <div class="loader_bg">
         <div class="loader"><img src="images/loading2.gif" alt="#" /></div>
      </div> -->
      <!-- end loader -->
    <!-- header -->
    <header>
         <!-- header inner -->
         <div id="header" class="header">
                <div id="white_header" class="header_white_section">
                     <div class="container-fluid">
                            <div class="row">
                                 <div class="col-md-12">
                                        <div class="header_information">
                                             <ul>
                                                    <li><img src="images/1.png" alt="#"/> Jl. Raya Lembang no.108</li>
                                                    <li><img src="images/2.png" alt="#"/> +62  89860708361</li>
                                                    <li><img src="images/3.png" alt="#"/> farmhouse@gmail.com</li>
                                                    <li></li>
                                             </ul>
                                        </div>
                                 </div>
                            </div>
                     </div>
                </div>
                <div class="container">
                     <div class="row">
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                                 <div class="full">
                                        <div class="center-desk">
                                             <div class="logo"> <a href="index.php"><img src="images/logo2.png" width="70%" alt="#"></a> </div>
                                        </div>
                                 </div>
                            </div>
                            <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                                 <div class="menu-area">
                                        <div class="limit-box">
                                             <nav class="main-menu">
                                                    <ul class="menu-area-main">
                                                         <li> <a href="index.php#home">Beranda</a> </li>
                                                         <li> <a href="index.php#about">Tentang Kami</a> </li>
                                                         <li><a href="index.php#demos">Galeri</a></li>
                                                         <li><a href="index.php#blog">Lokasi</a></li>
                                                         <li><a href="index.php#contact">Hubungi Kami</a></li>
                                                         <li><button class="fh5co-sub-ddown btn bg-light p-2 mt-2" style="border-radius: 5%;">Profil <i class="la la-arrow-down "></i></button>
                                                         <ul class="fh5co-sub-menu">
                                                            <li><a href="login.php" target="_blank">Login</a></li>
                                                            <li><a href="biodata.php" target="_blank">Biodata</a></li>
                                                            <li><a href="Riwayat.php" target="_blank">Riwayat Pesanan</a></li>
                                                        </ul></li>
                                                    </ul>
                                             </nav>
                                        </div>
                                 </div>
                            </div>
                     </div>
                </div>
         </div>
         <!-- end header inner -->
    </header>
    <!-- end header -->
    <div class="container-pesan">
        <div class="container container-pemesanan">
            <h2 class="text-center" style="margin: 10px;">PEMESANAN TIKET</h2>
            <form action="" method="post">
                <table cellpadding="20" border="0">
                    <tr>
                        <th><input name="grup1" id="rd1" class="input-form-number" type="radio" value="70000" onclick="btn1()">Tiket All In One
                            <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rp. 70.000</th>
                        <th><input name="grup1" id="rd2" class="input-form-number" type="radio" value="50000" onclick="btn1()">Tiket Reguler 1
                            <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rp. 50.000</th>
                    </tr>
                    <tr>
                        <th><input name="grup1" id="rd3" class="input-form-number" type="radio" value="40000" onclick="btn1()">Tiket Reguler 2
                            <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rp. 40.000</th>
                        <th><input name="grup1" id="rd4" class="input-form-number" type="radio" value="30000" onclick="btn1()">Tiket Reguler 3
                            <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rp. 30.000</th>
                    </tr>
                </table>
                <br>
                <label>Masukkan Jumlah Pengunjung</label><br>
                    <input id="jumlah" class="input-form-value" type="number" placeholder="Jumlah Pengunjung" value="" onclick="btn1()"><br>
                <br>
                <label>TOTAL BIAYA</label><br>
                    <div id="cetak">Total</div><br>
<!--                    <input disabled required class="input-form-value" type="number" name="" value="" placeholder="Total"><br>-->
                <label>Password</label><br>
                    <input class="input-form-value" type="password" name="pass" placeholder="Masukkan Password"><br><br>
                <label>Tanggal Kedatangan</label><br>
                    <input type="type"  placeholder="Tanggal" id="datepicker"><br><br>
                <div style="overflow-x:auto;">
                    <label>Pilih Metode Pembayaran</label>
                    <table border=0 cellpadding="20">
                        <tr>
                            <th><input name="grup2" type="radio"  value=""><img src="Gambar/OVO.jpg" width="60px" height="35px"></th>
                            <th><input name="grup2" type="radio"  value=""><img src="Gambar/bri.png" width="75px" height="25px"></th>
                            <th><input name="grup2" type="radio"  value=""><img src="Gambar/logo-bca.png" width="60px" height="25px"></th>
                            <th><input name="grup2" type="radio"  value=""><img src="Gambar/bni.png" width="60px" height="20px"></th>
                        </tr>
                        <tr>
                            <th><input name="grup2" type="radio"  value=""><img src="Gambar/Doku.png" width="50px" height="50px"></th>
                            <th><input name="grup2" type="radio"  value=""><img src="Gambar/indomaret.png" width="65px" height="30px"></th>
                            <th><input name="grup2" type="radio"  value=""><img src="Gambar/alfa.jpg" width="70px" height="50px"></th>
                            <th><input name="grup2" type="radio"  value=""><img src="Gambar/gopay.jpg" width="65px" height="40px"></th>
                        </tr>
                    </table>
                </div>
                <div class="row text-center mt-3" >
                    <div class="col-6">
                        <button class="Bayar" onclick="alert('Pesanan anda telah dikirimkan')">Bayar</button>
                    </div>
                    <div class="col-6">
                        <button class="Batal" onclick="alert('Pesanan anda dibatalkan')">Batalkan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- footer -->
      <footer>
         <div id="contact" class="footer">
            <div class="container">
               <div class="row pdn-top-30">
                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                     <ul class="location_icon">
                        <li> <a href="https://www.facebook.com/farmhouselembangbdg/"><img src="icon/facebook.png"></a></li>
                        <li> <a href="https://twitter.com/farmhouse_bdg?lang=en"><img src="icon/Twitter.png"></a></li>
                        <li> <a href="#"><img src="icon/linkedin.png"></a></li>
                        <li> <a href="https://www.instagram.com/farmhouselembang/"><img src="icon/instagram.png"></a></li>
                     </ul>
                  </div>
                  <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                     <div class="Follow">
                        <h3>HUBUNGI KAMI</h3>
                        <span>Jl. Raya Lembang no.108 <br>Gudangkahuripan,<br>
                        Lembang, Kabupaten Bandung<br>
                        085860708361</span>
                     </div>
                  </div>
                  <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                     <div class="Follow">
                        <h3>ADDITIONAL LINKS</h3>
                        <ul class="link">
                           <li> <a href="#about">Tentang Farmhouse</a></li>
                           <li> <a href="#">Beranda</a></li>
                           <li> <a href="#demos">Galeri</a</li>
                           <li> <a href="#testimonial-carousel">News</a></li>
                           <li> <a href="login.php">Profil</a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                     <div class="Follow">
                        <h3> Kontak </h3>
                        <div class="row">
                           <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                              <input class="Newsletter" placeholder="Name" type="text">
                           </div>
                           <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                              <input class="Newsletter" placeholder="Email" type="text">
                           </div>
                           <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                              <textarea class="textarea" placeholder="comment" type="text">Comment</textarea>
                           </div>
                        </div>
                        <button class="Subscribe">Submit</button>
                     </div>
                  </div>
               </div>
               <div class="copyright">
                  <div class="container">
                     <p>Copyright 2021 All Right Reserved By <a href="https://html.design/">kelomok 12 with html.design</a></p>
                  </div>
               </div>
            </div>
         </div>
      </footer>
<!-- end footer -->

    <!-- SCROLL FIX NAVBAR -->
  <script type="text/javascript">
  $(document).ready(function(){
    var fixed = $("#header");
    var white = $("#white_header");

    $(document).on("scroll", function() {
      // alert($(document).scrollTop() + " px");
    if ($(document).scrollTop() > 50) {
      white.hide();
      fixed.addClass("scroll-fix");
      $("body").css("padding-top", "120px" );
    } else {
      fixed.removeClass("scroll-fix");
      white.show();
      $("body").css("padding-top", "0" );
    }
    })
  });
  </script>

    </body>
</html>
