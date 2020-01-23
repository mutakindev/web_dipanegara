<?php

  if (isset($_REQUEST['aksi'])) {
    $aksi = $_REQUEST['aksi'];
    switch ($aksi) {
      case 'view':
        include 'Template/Aksi/view-berita.php';
        break;

    //   case 'view':
    //     include 'Templates/Aksi/view.php';
    //     break;

      case 'edit':
        include 'Template/Aksi/edit.php';
        break;

      case 'delete':
        include 'Template/Aksi/delete.php';
        break;

      default:
        // code...
        break;
    }
  } else{ ?>

<h2 class="judul">Data Berita</h2>
<a href="utama.php?page=daftar" class="tombol">Tambah</a>

<table class="table">
          <thead>
            <tr>
              <th>No</th>
              <th align="left">Nama Lengkap</th>
              <th align="left">Username</th>
              <th align="left">E-mail</th>
             
            </tr>
          </thead>
          <tbody>

          <?php  
            $no=0;
            $tampil = mysqli_query($kon,"SELECT * FROM administrator");
            while ($row = mysqli_fetch_array($tampil)) {
            $no++;
        ?>

            <tr>
              <td align="center"><?php echo $no; ?></td>
              <td>
                <?php echo $row['nama']; ?>
              </td>
              <td><?php echo $row['username']; ?></td>
              <td><?php echo $row['email']; ?></td>
              
            </tr>
            <?php } ?>
          </tbody>
        </table>
<?php } ?>