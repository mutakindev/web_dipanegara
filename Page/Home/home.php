<?php

  if (isset($_REQUEST['aksi'])) {
    $aksi = $_REQUEST['aksi'];
    switch ($aksi) {
      case 'view':
        include 'Page/Berita/view-berita.php';
        break;

      default:
        // code...
        break;
    }
  } else{ ?>
<div class="slideshow-container">
    <div class="mySlides fade">
        <img src="assets/images/news/4.png" alt="">
        <div class="text"><a href="#">Caption One</a></div>
    </div>
    <div class="mySlides fade">
        <img src="assets/images/news/3.png" alt="">
        <div class="text"><a href="#">Caption Two</a></div>
    </div>
    <div class="mySlides fade">
        <img src="assets/images/news/6.png" alt="">
        <div class="text"><a href="#">Caption Thre</a></div>
    </div>
    <div class="mySlides fade">
        <img src="assets/images/news/5.png" alt="">
        <div class="text"><a href="#">Caption For</a></div>
    </div>
    <div class="mySlides fade">
        <img src="assets/images/news/4.png" alt="">
        <div class="text"><a href="#">Caption Five</a></div>
    </div>
    <button onclick="plusSlides(-1)" class="prev"><i class="fa fa-angle-left fa-4x"></i></button>
    <button onclick="plusSlides(1)" class="next"><i class="fa fa-angle-right fa-4x"></i></button>
</div>
<div class="dot-container">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
    <span class="dot" onclick="currentSlide(4)"></span>
    <span class="dot" onclick="currentSlide(5)"></span>
</div>

<section class="berita">
    <h2>Berita Terkini</h2>
   
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
            <p><a href="utama.php?page=home&aksi=view&id=<?php echo $row['id']; ?>" class="readmore">Read More</a></p>
        </div>

        <?php } ?>   
        
    </div>
</section>
<?php 
  }
?>