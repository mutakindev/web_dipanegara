
      <main>
        <h2 class="judul">Tambah Pegawai</h2>
        <form action="" method="POST" enctype="multipart/form-data">

          <div class="form-group">
            <label for="judul">Nama Lengkap</label>
            <div class="input"><input type="text" name="nama" id="judul" placeholder="Nama Lengkap" /></div>
          </div>

          <div class="form-group">
            <label for="judul">Username</label>
            <div class="input"><input type="text" name="username" id="judul" placeholder="Username" /></div>
          </div>

          <div class="form-group">
            <label for="judul">E-mail</label>
            <div class="input"><input type="email" name="email" id="judul" placeholder="E-mail" /></div>
          </div>

          <div class="form-group">
            <label for="judul">Password</label>
            <div class="input"><input type="password" name="password" id="password" placeholder="Password" /></div>
          </div>


          <div class="form-group">
            <input type="submit" value="Simpan" name="save" class="tombol simpan" />
            <input type="reset" value="Batal" class="tombol reset" />
          </div>
          
        </form>

        <?php 
        If (isset($_POST['save'])) {

            $nama = $_POST['nama'];
            $username = $_POST['username'];            
            $email = $_POST['email'];
            $password = $_POST['password'];

            $query = mysqli_query($kon, "INSERT INTO administrator (nama, username, password, email) VALUES ('$nama', '$username', '$password', '$email')");

            if ($query) {
                header('location: utama.php?page=data-admin');
            }

        }

        ?>
        

      </main>
    </div>


  