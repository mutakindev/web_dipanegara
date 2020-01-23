<?php

    if(isset($_REQUEST['page'])){
        $page = $_REQUEST['page'];

        switch($page){
            case 'Home':
                include "Page/Home/home.php";
                break;

            case 'si':
                include "Page/Prodi/si.php";
                break;

            case 'visi-misi':
                include "Page/Tentang/visi-misi.php";
                break;

            case 'tujuan':
                include "Page/Tentang/tujuan.php";
                break;

            case 'sasaran':
                include "Page/Tentang/sasaran.php";
                break;

            case 'informatika':
                include "Page/Prodi/informatika.php";
                break;

            case 'list-berita':
                include "Page/Berita/list-berita.php";
                break;

             case 'rpl':
                include "Page/Prodi/rpl.php";
                break;

            case 'manajemen':
                include "Page/Prodi/manajemen-ti.php";
                break;
            case 'site-map':
                include "Page/Site-Map/site-map.php";
                break;
        }
    }
    else{
    ?>
        <h2>Halaman Tidak Ditemukan</h2>
    <?php
    }

?>
