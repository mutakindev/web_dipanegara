<?php
 include "dashboard/koneksi.php";
 include "Page/visitor_counter.php";
 $page_name = "Web Portal STMIK Dipanegara";
 $access_number = visitor($page_name);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>STMIK DIPANEGARA</title>
    <link rel="shortcut icon" href="assets/images/logodpbaru.jpg" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Lato|Montserrat|Open+Sans|Roboto&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/font-awesome.css">
</head>

<body>
    <div class="small-navbar">
        <div class="small-navbar-text">
            <p>STMIK DIPANEGARA</p>
        </div>
        <section class="right">
            <div class="small-navbar-search">
                <input type="search" name="search" id="search" placeholder="Cari">
                <button class="btn-search"><i class="fa fa-search"></i></span></button>
            </div>
            <a href="https://emaba.dipanegara.ac.id/" class="small-navbar-cta">JOIN US</a>
            <div class="small-navbar-social-media fixed">
                <div class="sosmed">
                    <a href="https://web.facebook.com/dipanegaramakassar/?_rdc=1&_rdr" target="_blank" class="sosmed-icon"><i class="fa fa-facebook"></i></a>
                </div>
                <div class="sosmed">
                    <a href="https://twitter.com/DipanegaraSTMIK" class="sosmed-icon" target="_blank"><i class="fa fa-twitter"></i></a>
                </div>
                <div class="sosmed">
                    <a href="https://www.instagram.com/dipanegara_official/" class="sosmed-icon" target="_blank"><i class="fa fa-instagram"></i></a>
                </div>
            </div>
        </section>
    </div>
    <div class="navbar">
        <div class="logo">
                <a href="utama.php?page=Home">
                    <img src="assets/images/logo400x400.png" alt="Logo stmik dipanegara">
                </a>
                <a href="utama.php?page=Home">
                    <h1 class="universitas-name">STMIK DIPANEGARA MAKASSAR</h1>
                </a>
        </div>
        <div class="menu"><i class="fa fa-list"></i></div>
        <div class="nav">
            <ul class="nav-link">
                <li class="drop nav-item drop-trigger"><a href="#">Tentang Kami</a>
                    <ul class="dropdown">
                        <li><a href="utama.php?page=visi-misi">Visi dan Misi</a></li>
                        <li><a href="utama.php?page=sasaran">Sasaran</a></li>
                        <li><a href="utama.php?page=tujuan">Tujuan</a></li>
                    </ul>
                    &nbsp;<i class="fa fa-caret-down submenu-icon"></i>
                </li>
                <li class="drop nav-item drop-trigger"><a href="#">Prodi</a>
                    <ul class="dropdown">
                        <li><a href="utama.php?page=si">Sistem Informasi - S1</a></li>
                        <li><a href="utama.php?page=informatika">Teknik Informatika - S1</a></li>
                        <li><a href="utama.php?page=rpl">Rekayasa Perangkat Lunak - S1</a></li>
                        <li><a href="utama.php?page=manajemen">Manajemen Informatika - D3</a></li>
                    </ul>
                    &nbsp;<i class="fa fa-caret-down submenu-icon"></i>
                </li>
                <li class="nav-item"><a href="utama.php?page=list-berita">Berita</a></li>
                <li class="nav-item"><a href="utama.php?page=site-map">Peta Situs</a></li>
            </ul>
        </div>
    </div>

    <!-- Content -->
    <?php include "content.php"; ?>
    <section class="lokasi">
        <div class="row">
            <div class="col">
                <div class="map" id="map">
                </div>
            </div>
            <div class="col">
                <div class="visitor-counter">
                    <p>Visitor</p>
                    <p><span class="visitor-number">
                        <?php echo number_format($access_number); ?> <i class="fa fa-users"></i>
                    </span></p>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="situs-terkait">
            <div class="logo-footer">
                <img src="assets/images/logodpbaru.jpg" alt="">
            </div>
            <ul>
                <h4>Situs Terkait</h4>
                <li>
                    <a href="http://ikadipa.id/" rel="no follow">Ikatan Alumni (IKA)</a>
                </li>
                <li>
                    <a href="http://forlap.dikti.go.id/" rel="no follow">PDPT DIKTI</a>
                </li>
                <li>
                    <a href="https://serdos.dikti.go.id/" rel="no follow">SERDOS</a>
                </li>
                <li>
                    <a href="http://simlitabmas.dikti.go.id/" rel="no follow">SIM-LITABMAS</a>
                </li>
                <li>
                    <a href="http://sinta2.ristekdikti.go.id/" rel="no follow">Sinta (Science and Technology Index)</a>
                </li>
            </ul>
        </div>
        <div class="sosmed-footer">
            <a href="https://emaba.dipanegara.ac.id/" class="small-navbar-cta">JOIN US</a>
            <div class="small-navbar-social-media">
                <div class="sosmed">
                    <a href="https://web.facebook.com/dipanegaramakassar/?_rdc=1&_rdr" target="_blank" class="sosmed-icon"><i class="fa fa-facebook"></i></a>
                </div>
                <div class="sosmed">
                    <a href="https://twitter.com/DipanegaraSTMIK" class="sosmed-icon" target="_blank"><i class="fa fa-twitter"></i></a>
                </div>
                <div class="sosmed">
                    <a href="https://www.instagram.com/dipanegara_official/" class="sosmed-icon" target="_blank"><i class="fa fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </footer>


    <script src="js/main.js"></script>
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC0v8_AHDqwL8stQLEMWYQgxfw__b5F0hU&callback=initMap">
        </script>
</body>

</html>