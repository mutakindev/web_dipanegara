<?php
  if (isset($_REQUEST['d'])) {
    $id_del = $_REQUEST['d'];
    $sql = mysqli_query($kon,"DELETE FROM berita WHERE id = $id_del");
    if ($sql == true) {
      header('location:./utama.php?page=tabel');
    }
    else{ ?>
      <script type="text/javascript">
        alert('Data gagal dihapus!');
      </script>
      <?php
    }
  }
 ?>
