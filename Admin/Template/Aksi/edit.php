<?php
If (isset($_POST['save'])) {

    
    $id = $_REQUEST['id'];
	  $judul = $_POST['judul'];
    $isi_berita = $_POST['isi'];
    
    $query = mysqli_query($kon, "UPDATE berita SET judul = '$judul', isi = '$isi_berita' WHERE id = $id");

    if ($query) {
        header('location:utama.php?page=tabel');
    }
    else {
        echo "GAGAL UPDATE!";
    }

}
else {
    $id = $_REQUEST['id'];
    $sql = mysqli_query($kon, "SELECT * FROM berita WHERE id = $id");
    while ($row = mysqli_fetch_array($sql)){

?>

<h2 class="judul">Edit Berita</h2>
        <form action="" method="POST" enctype="multipart/form-data">
        
          <div class="form-group">
            <label for="judul">Judul</label>
            <div class="input"><input type="text" name="judul" id="judul" value="<?php echo $row['judul']; ?>" /></div>
          </div>

          <div class="form-group">
            <label for="isi">Isi Berita</label>
            <div class="input">
              <div class="input"><textarea name="isi" id="isi" cols="72"  rows="10"><?php echo $row['isi']; ?></textarea></div>
            </div>
          </div>

          <div class="form-group">
            <input type="submit" value="Simpan" name="save" class="tombol simpan" />
            <input type="reset" value="Batal" class="tombol reset" />
          </div>
          
        </form>

        <?php 
    }
}
?>

