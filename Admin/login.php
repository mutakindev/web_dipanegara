<?php 
session_start();
  include "../dashboard/koneksi.php";

  if (isset($_REQUEST['login'])) {
    $user = $_REQUEST['username'];
    $pass = $_REQUEST['password'];
    $sql = mysqli_query($kon,"SELECT * FROM administrator WHERE username = '$user' AND password = '$pass' ");
    $row = mysqli_fetch_array($sql);
    $count = mysqli_num_rows($sql);
    if ($count > 0) {
      $_SESSION['user'] = $row['username'];
      $_SESSION['nama'] = $row['nama'];
      header('location:utama.php?page=welcome');
    }
    else{ ?>

      <script type="text/javascript">
        alert('Username atau Password tidak sesuai');
      </script>
    <?php 
    }
  }
 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Login Aplikasi</title>
    <link rel="stylesheet" href="../css/dashboard.css" />
  </head>
  <body>
    <div class="container">
      <section class="login-box">
        <h2>Login Aplikasi</h2>
        <form action="" method="POST">
          <input type="text" id="username" name="username" placeholder="Username" />
          <input type="password" name="password" id="password" placeholder="Password" />
          <input type="submit" name="login" value="Login" />
        </form>
      </section>
    </div>
  </body>
</html>
