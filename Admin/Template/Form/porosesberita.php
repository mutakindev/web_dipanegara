<?php 

// include "koneksi.php";

If ($_POST['save']) {

	$ekstendi_diperbolehkan = array('png', 'jpg');
	$nama = $_FILES['file']['name'];
	$x = explode('.', $nama);
	$ekstensi = strtolower(end($x));
	$ukuran = $_FILES['file']['size'];
	$file_tmp = $_FILES['file']['tmp_name'];
	$time = time();
	$new_name = $time .$nama ;
	$judul = $_POST['judul'];
	$isi_berita = $_POST['isi'];

	if (in_array($ekstensi, $ekstendi_diperbolehkan) === true) {

		if ($ukuran < 4044070) {
			move_uploaded_file($file_tmp, 'img/'.$new_name);
			$query = mysqli_query($kon, "INSERT INTO berita (gambar, judul, isi) VALUES ('$new_name', '$judul', '$isi_berita')");

			if ($query) {
				// echo "FILE NERHASIL DIUPLOAD";
                header('location:localhost/web-portal/admin/utama.php?page=tabel');
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
