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
<a href="utama.php?page=create-berita" class="tombol">Tambah</a>

<table class="table">
          <thead>
            <tr>
              <th>No</th>
              <th>Thumbunail</th>
              <th>Judul Berita</th>
              <th>Isi Berita</th>
              <th>Waktu Publish</th>      
              <th>Penerbit</th>
              <th>Edit</th>
              <th> Hapus</th>
            </tr>
          </thead>
          <tbody>

          <?php  
            $no=0;
            $tampil = mysqli_query($kon,"SELECT * FROM berita");
            while ($row = mysqli_fetch_array($tampil)) {
            $text_lengkap = $row['isi'];
            $text_potongan=substr($text_lengkap, 0, 40);
            $no++;
        ?>

            <tr>
              <td align="center"><?php echo $no; ?></td>
              <td><img src="<?php echo "img/" .$row['gambar']; ?>" width="100" alt="" /></td>
              <td>
                <a href="utama.php?page=tabel&aksi=view&id=<?php echo $row['id']; ?>"><?php echo $row['judul']; ?></a>
              </td>
              <td><?php echo $text_potongan?></td>
              <td><?php echo $row['waktu']; ?></td>
              <td><?php echo $row['post_by']; ?></td>
              <td>
                <a href="utama.php?page=tabel&aksi=edit&id=<?php echo $row['id'] ?>" class="tombol edit">Edit</a>
              </td>

              <td><a onclick="return confirm('Apakah Anda yakin?')"href="./utama.php?page=tabel&aksi=delete&d=<?php echo $row['id']; ?>" class="tombol hapus">Hapus</a></td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
<?php } ?>