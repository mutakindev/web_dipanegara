<style type="text/css">
.berita{
    background-color: #F3F4F5;
    margin: 0;
}

img{
    width: 200px;
    float: left;
    padding-right: 20px;
}

p{
    margin-top: -18px;
    /* margin-right: -10px; */
}

</style>

<?php 

                // if (isset($_REQUEST['view'])) {
                    $id = $_REQUEST['id'];
                    
                    $tampil = mysqli_query($kon,"SELECT * FROM berita WHERE id = $id");
                    while ($row = mysqli_fetch_array($tampil)) {
                    // $text_lengkap = $row['isi'];
                    // $text_potongan=substr($text_lengkap, 0, 300);

            ?>

<section style="padding:10px;" class="berita">
    <h3><?php  echo $row['judul']; ?></h3>
    
    <div class="container">
        <div class="news-item">

            <img src="<?php echo "img/" .$row['gambar']; ?>" alt=""> <br>
            <p><?php echo $row['isi']; ?></p>

            <small><span class="date"><i>Post by <?php echo $row['post_by'] .","; ?></i></span></small>
            <small><span class="date"><?php echo $row['waktu']; ?></span></small> <br><br>
            
            <!-- <a href="utama.php?page=admin&aksi=edit&id=<?php echo $row['id']; ?>">Edit</a> -->

        </div>

    </div>
</section>

 <?php 
    } 
// }
?>