<?php 
  include "../dashboard/koneksi.php" ;
  session_start();

  
  ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Dashboard</title>
    <link rel="stylesheet" href="../css/dashboard.css" />
  </head>
  <body>
    <header>
      
       <?php 
       if (isset($_SESSION['nama'])){
         $user = $_SESSION['nama'];
        
      ?>
      STMIK DIPANEGARA
      (<?php echo $user; ?>)

    </header>
    <div class="container">
      <aside>
        <ul class="menu">
          <li><a href="#">Dashboard</a></li>
          <li><a href="utama.php?page=tabel">Data Berita</a></li>
          <li><a href="utama.php?page=data-admin">Data Pengguna</a></li>
          <li><a href="utama.php?page=logout">Keluar</a></li>
        </ul>
      </aside>
      <main>
        <!-- <h1>Selamat Datang di STMIK DIPANEGARA</h1>
        <h3>Anda login sebagai Administrator</h3> -->
        <?php include "routes.php"; ?>

      </main>
    </div>
  </body>
       <?php } ?>
</html>
