<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Halaman Daftar</title>
<link href="http://localhost:8181/PinjamSepedaTes/assets/images/imaginearts.png" rel="shortcut icon">
<link href="http://localhost:8181/PinjamSepedaTes/assets/css/style-admin.css" rel="stylesheet" type="text/css">
</head>

<body>
<div id="login">
<h1>Halaman Login</h1>

 
<form name="form1" method="POST" action="http://localhost:8181/PinjamSepedaTes/admin/login/validasi">
  <p>
    <label for="username">Username</label>
    <input type="text" name="username" id="username" placeholder="Username" required autofocus>
  </p>
  <p>
    <label for="password">Password</label>
    <input type="password" name="password" id="password" placeholder="Password" required autofocus>
  </p>
  <p>
    <input type="submit" name="submit" id="submit" value="Login">
    <a href="http://localhost:8181/PinjamSepedaTes/"><span class="tambah">    Back to home
    </span></a></p>
</form>
<footer>KPPL D 2016</footer>
</div>
</body>
</html>