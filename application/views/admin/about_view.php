<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Halaman About</title>
<link href="<?php echo base_url(); ?>/assets/css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
<div id="wrapper">
<header>
    	<div id="logo"><a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>/assets/images/bicycle.png" width="400" height="400"></a></div>
        <div id="nama"><span class="nama">PEMINJAMAN SEPEDA</span><br>
        <span class="aipni">Selamat Datang di Sistem Informasi Peminjaman Sepeda</span></div>
  </header>

<nav>
  	<ul>
    	<li><a href="<?php echo base_url(); ?>">Home</a></li>
        <li><a href="<?php echo base_url(); ?>admin/About">About Us</a></li>
        <li><a href="<?php echo base_url(); ?>admin/login">Login</a></li>
        <li><a href="<?php echo base_url(); ?>admin/Kontak">Kontak</a></li>
        <li><a href="http://is.its.ac.id" target="_blank">Website Pendukung</a></li>

    </ul>
  </nav>
<div class="konten">

      <div class="posting">
        <h3>About Us</h3>

        <div class="ringkasan">
          <p>Peminjaman Sepeda</p>
          <p>Merupakan website yang dibuat sebagai tugas kelompok dalam menempuh mata kuliah ADPL. Dimana pada saat ADPL masih berupa analisis desain yang kemudian dilanjutkan pada mata kuliah KPPL untuk melakukan konstruksi website dan pengujiannya</p>
          <p>Adapun Anggota Kelompok kami untuk KPPL adalah sebagai berikut :</p>
          <p>
          <ul>
              <li>Arymasu Godhein Ndoen</li>
              <li>Gede Doran Andika</li>
              <li>Nur Rochman Darmawan</li>
          </ul>
          </p>
        </div>
      </div>


        <div class="anggota">
          <h3>Login Administrator</h3>
                    <form name="form2" method="POST" action="<?php echo base_url(); ?>/admin/login/validasi">
            <p>
              <label for="username">Username</label>
              <input type="text" name="username" id="username" placeholder="Username" required autofocus>
            </p>
            <p>
              <label for="password">Password</label>
              <input type="password" name="password" id="password" placeholder="Password" required autofocus>
            </p>
            <p>
              <input type="submit" name="submit2" id="submit2" value="Masuk">
              <input type="reset" name="submit3" id="submit3" value="Reset">
            </p>
            <p><a href="login.php?ref=lupa">Lupa password?</a> | <a href="daftar.php">Daftar jadi anggota</a></p>
          </form>
      </div>
</div>

 <div class="clearfix"></div>
    <footer><a href="http://is.its.ac.id" target="_blank">Konstruksi dan Pengujian Perangkat Lunak D</a> | &copy;Peminjaman Sepeda - 2017</footer></div>
</body>
</html>
