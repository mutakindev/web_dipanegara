
<h2 class="judul">Isi Berita</h2>
        <form action="" method="POST" enctype="multipart/form-data">
          <div class="form-group">
            <label for="foto">Foto</label>
            <div class="input"><input type="file" name="file" id="foto" /></div>
          </div>

          <div class="form-group">
            <label for="judul">Judul</label>
            <div class="input"><input type="text" name="judul" id="judul" placeholder="Judul berita" /></div>
          </div>

          <div class="form-group">
            <label for="isi">Isi Berita</label>
            <div class="input">
              <div class="input"><textarea name="isi" id="isi" cols="72" placeholder="Masukkan isi berita" rows="10"></textarea></div>
            </div>
          </div>

          <div class="form-group">
            <input type="submit" value="Simpan" name="save" class="tombol simpan" />
            <input type="reset" value="Batal" class="tombol reset" />
          </div>
          
        </form>

        <?php 

// include "koneksi.php";

If (isset($_POST['save'])) {

	$ekstendi_diperbolehkan = array('png', 'jpg');
	$nama = $_FILES['file']['name'];
	$x = explode('.', $nama);
	$ekstensi = strtolower(end($x));
	$ukuran = $_FILES['file']['size'];
	$file_tmp = $_FILES['file']['tmp_name'];
    $time = time();
    // $folder = "img/";
	$new_name = $time .$nama ;
	$judul = $_POST['judul'];
	$isi_berita = $_POST['isi'];
	$penerbit = $user;

	if (in_array($ekstensi, $ekstendi_diperbolehkan) === true) {

		if ($ukuran < 4044070) {
			move_uploaded_file($file_tmp, 'img/'.$new_name);
			$query = mysqli_query($kon, "INSERT INTO berita (gambar, judul, isi, post_by) VALUES ('$new_name', '$judul', '$isi_berita', '$penerbit')");

			if ($query) {
				// echo "FILE NERHASIL DIUPLOAD";
                header('location:utama.php?page=tabel');
			}
			else {
				echo "GAGAL UPLOA GAMBAR";
			}
		}
		else {
			echo "UKURAN FILE TERLALU BESAR";
		}

	}
	else {
		echo "EKSTESNI TIDAK SESUAI";
	}

}

?>
