<style type="text/css">
.berita{
    background-color: #F3F4F5;
    margin: 0;
}
</style>


<section class="berita">
    <h2>Daftar Berita</h2>
    <!-- <div class="container">
        <div class="news-item">
            <img src="assets/images/news/3.png" alt="">
            <h3>Penerimaan Sertifikasi ISO 2020 Oleh Kyubi Institut</h3>
            <small><span class="date">23 November 2019</span></small>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi neque possimus doloribus consectetur ut
            </p>
            <p><a href="#" class="readmore">Read More</a></p>
        </div>
        <div class="news-item">
            <img src="assets/images/news/4.png" alt="">
            <h3>Penerimaan Sertifikasi ISO 2020 Oleh Kyubi Institut</h3>
            <small><span class="date">23 November 2019</span></small>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi neque possimus doloribus consectetur ut
            </p>
            <p><a href="#" class="readmore">Read More</a></p>
        </div>
        <div class="news-item">
            <img src="assets/images/news/5.png" alt="">
            <h3>Penerimaan Sertifikasi ISO 2020 Oleh Kyubi Institut</h3>
            <small><span class="date">23 November 2019</span></small>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi neque possimus doloribus consectetur ut
            </p>
            <p><a href="#" class="readmore">Read More</a></p>
        </div>
    </div> -->
    <div class="container">

        <?php  
             $tampil = mysqli_query($kon,"SELECT * FROM berita");
            while ($row = mysqli_fetch_array($tampil)) {
            $text_lengkap = $row['isi'];
            $text_potongan=substr($text_lengkap, 0, 40);
        ?>

        <div class="news-item">
            <img style="width:300px;" src="<?php echo "Admin/img/" .$row['gambar']; ?>" alt="">
            <h3><?php  echo $row['judul']; ?></h3>
            <small><span class="date"><i>Post by <?php echo $row['post_by'] .","; ?></i></span></small>
            <small><span class="date"><?php echo $row['waktu']; ?></span></small>
            <p>
                <?php echo $text_potongan; ?>
            </p>
            <p><a href="#" class="readmore">Read More</a></p>
        </div>

        <?php } ?>
    </div>
</section>