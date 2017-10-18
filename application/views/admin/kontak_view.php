<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Halaman Kontak</title>
<!--<link href="<?php echo base_url(); ?>assets/images/imaginearts.png" rel="shortcut icon">
<link href="<?php echo base_url(); ?>assets/css/style-admin.css" rel="stylesheet" type="text/css">-->
<link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
<div id="wrapper">
<header>
    	<div id="logo"><a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>assets/images/bicycle.png" width="400" height="400"></a></div>
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
        <h3>Kontak</h3>

        <div class="ringkasan">
          <p>Bagaimana Kami Membantu Anda? Anda dapat mengirim pertanyaan seputar sewa sepeda kepada :</p>
          <p>
          <ul>
              <div class="Nama"><li>Nur Rochman Darmawan</li></div>
              <div class="Telpon"><li>031-212012</li></div>
              <div class="SMS"><li>085780341717</li></div>
              <div class="Email"><li>rochmandarmawan12@gmail.com</li></div>
              <div class="Facebook"><li><a href="https://www.facebook.com/" target="_blank">Facebook</a></li></div>
          </ul>
          </p>
        </div>
      </div>
        <div class="anggota">
          <h3>Login Administrator</h3>
                    <form name="form2" method="POST" action="<?php echo base_url(); ?>admin/login/validasi">
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
            <p><a href="login.php?ref=lupa">Lupa password?</a> | <a href="<?php echo base_url(); ?>admin/daftar">Daftar jadi anggota</a></p>
          </form>
      </div>
</div>
 <div class="clearfix"></div>
    <footer><a href="http://is.its.ac.id" target="_blank">Konstruksi dan Pengujian Perangkat Lunak D</a> | &copy;Peminjaman Sepeda - 2017</footer></div>
</body>
</html>
