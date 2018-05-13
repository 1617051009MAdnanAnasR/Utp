<?php
   session_start();
   if(isset($_SESSION['username'])) {
   header('location:index.php'); }
   require_once("koneksi.php");
?>


<title>Form Login</title>
<link rel="stylesheet" href="style.css">
<body>
  <font color="black"><center><h2>Welcome Back!!</h2></font>
  <h3>Untuk Akses Halaman Website Anda Diharuskan Login Terlebih Dahulu</h3><br>
  <div class="kotak">
			<form action ="proseslogin.php" method="POST">
				<input class="input" type="text" name="username" placeholder="Username">
				<input class="input" type="password" name="password" placeholder="Password">
				<input class="sub" value="Login" type="submit">
			</form>
		</div>
</body>
